<?php
include_once("../classes/efai019.php");
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
$total = 0;

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
$efai019 = new efai019();

$efai019->setcustcode($intlotdata2->custcode);
$efai019->setintlot($intlotno);
$efai019->setwswr($data->wswr);
$efai019->setswrno($data->swrno);
$efai019->setpackagetype($data->packagetype);
$efai019->setstripno($data->stripno);
$efai019->setpackagethickness($data->packagethickness);
$efai019->setpackagesize($data->packagesize);
$efai019->setarraysize($data->arraysize);
$efai019->setsamplingplan($data->samplingplan);
$efai019->setsamplingsize($data->samplingsize);
$efai019->setremarks($data->remarks);
$efai019->setlastupdatedby($_SESSION['idno']);
$success = $efai019->Addefai019();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;
        
        for($x=0;$x<count($sdwaferno);$x++){

            $total += (int) $sdqty[$x];
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('019');
            $reject->setmachine('');
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d H:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }

        $ilot = new IntLotno;
        $ilot->updateCurrqty2($intlotno,$intlotdata2->custcode,intval($intlotdata2->currqty) - intval($total));
        
    }
}
else
{
    echo "error_Can't Connect to Database!";
}


?>