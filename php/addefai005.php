<?php
include_once("../classes/efai005.php");
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
$efai005 = new efai005();

$efai005->setcustcode($intlotdata2->custcode);
$efai005->setintlot($intlotno);
$efai005->setwswr($data->wswr);
$efai005->setswrno($data->swrno);
$efai005->setwafersize($data->wsize);
$efai005->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai005->sethighmaginspection($data->highmaginspection);
$efai005->setwafernoinspected($data->wafernoinspected);
$efai005->setremarks($data->remarks);
$efai005->setlastupdatedby($_SESSION['idno']);
$success = $efai005->AddeFAI005();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('005');
            $reject->setmachine('');
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d H:i:s"));
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