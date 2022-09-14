<?php
include_once("../classes/efai012.php");
include_once("../classes/intlotno.php");
include_once("../classes/reject.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

//json defect
$sdwaferno = json_decode($_GET['sdwaferno']);
$sddetails = json_decode($_GET['sddetails']);
$sdqty = json_decode($_GET['sdqty']);
$sdremarks = json_decode($_GET['sdremarks']);

$exist = IntLotno::checkExist($intlotno);

if($exist == 'false')
{
    echo 'error_Error! '.$intlotno.' not exist on our Database!';
    return false;
}

if(!$_SESSION['idno'])
{
    echo 'error_Login session timeout!';
    return false;
}
$lotdata = IntLotno::GetDetails($intlotno);
$intlotdata = json_encode($lotdata[0]);
$intlotdata2 = json_decode($intlotdata);

//echo $intlotdata2->custcode;
$efai012 = new efai012();

$efai012->setcustcode($intlotdata2->custcode);
$efai012->setintlot($intlotno);
$efai012->setwswr($data->wswr);
$efai012->setswrno($data->swrno);
$efai012->settally($data->tally);
$efai012->setqtyouttally($data->qtyouttally);
$efai012->setdetailsattached($data->detailsattached);
$efai012->setcanisterused($data->canisterused);
$efai012->setcanisternoused($data->canisternoused);
$efai012->setproperlyvacuum($data->properlyvacuum);
$efai012->setremarks($data->remarks);
$efai012->setlastupdatedby($_SESSION['idno']);
$success = $efai012->Addefai012();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('012');
            $reject->setmachine('');
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d h:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }
    }
}
else
{
    echo "error_Can't Connect to Database!";
}


?>