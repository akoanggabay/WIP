<?php
include_once("../classes/efai003.php");
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/thickness.php");
include_once("../classes/roughness.php");
include_once("../classes/reject.php");
include_once("../classes/passcode.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

$stwaferno = json_decode($_GET['stwaferno']);
$stpoint1 = json_decode($_GET['stpoint1']);
$stpoint5 = json_decode($_GET['stpoint5']);
$stpoint2 = json_decode($_GET['stpoint2']);
$stpoint3 = json_decode($_GET['stpoint3']);
$stpoint4 = json_decode($_GET['stpoint4']);
$sttv = json_decode($_GET['sttv']);
$spave = json_decode($_GET['spave']);


$rpoint1 = $_GET['rpoint1'];
$rpoint2 = $_GET['rpoint2'];
$rpoint3 = $_GET['rpoint3'];
$rpoint4 = $_GET['rpoint4'];
$rpoint5 = $_GET['rpoint5'];
$rave = $_GET['rave'];

//json defect
$sdwaferno = json_decode($_GET['sdwaferno']);
$sddetails = json_decode($_GET['sddetails']);
$sdqty = json_decode($_GET['sdqty']);
$sdremarks = json_decode($_GET['sdremarks']);

$exist = IntLotno::checkExist($intlotno);
$techexist = passcode::checkExist($data->mptechemp,'tech');
$qcexist = passcode::checkExist($data->mpqcemp,'qc');

if($exist == 'false')
{
    echo 'error_Error! '.$intlotno.' not exist on our Database!';
    return false;
}

if($techexist == 'false' && strtoupper($data->mptechemp) != 'N/A')
{
    echo 'error_Error! Technician Employee passcode does not exist!';
    return false;
}

if($qcexist == 'false' && strtoupper($data->mpqcemp) != 'N/A')
{
    echo 'error_Error! QC Employee passcode does not exist!';
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

$bgtapetime = IntLotLogs::ILNLogsTapingtoBG($intlotno);
//echo $intlotdata2->custcode;
$efai003 = new efai003();

$efai003->setcustcode($intlotdata2->custcode);
$efai003->setintlot($intlotno);
$efai003->setmachine($data->machine);
$efai003->setfaicat($data->faicat);
$efai003->setwswr($data->wswr);
$efai003->setswrno($data->swrno);
$efai003->setrecipeno($data->recipeno);
$efai003->setwtaperequiredfinalthickness($data->wtaperequiredfinalthickness);
$efai003->setwtapeinitialthickness($data->wtapeinitialthickness);
$efai003->setslottingoncassette($data->slottingoncassette);
$efai003->setprocessmode($data->processmode);
$efai003->setbgtapetype($data->bgtapetype);
$efai003->setbgtapeused($data->bgtapeused);
$efai003->setbgtapethickness($data->bgtapethickness);
$efai003->setbgtapestaged($bgtapetime);
$efai003->setdiwatertemp($data->diwatertemp);
$efai003->setgrindingwheelz1($data->grindingwheelz1);
$efai003->setgrindingwheelz2($data->grindingwheelz2);
$efai003->setgrindingwheelusabletoothz1($data->grindingwheelusabletoothz1);
$efai003->setgrindingwheelusabletoothz2($data->grindingwheelusabletoothz2);
$efai003->setaircutz1($data->aircutz1);
$efai003->setaircutz2($data->aircutz2);
$efai003->setspindlerpmz1($data->spindlerpmz1);
$efai003->setspindlerpmz2($data->spindlerpmz2);
$efai003->setfeedratep1z1($data->feedratep1z1);
$efai003->setfeedratep1z2($data->feedratep1z2);
$efai003->setfeedratep2z1($data->feedratep2z1);
$efai003->setfeedratep2z2($data->feedratep2z2);
$efai003->setfeedratep3z1($data->feedratep3z1);
$efai003->setfeedratep3z2($data->feedratep3z2);
$efai003->setchucktableseedp1z1($data->chucktableseedp1z1);
$efai003->setchucktableseedp1z2($data->chucktableseedp1z2);
$efai003->setchucktableseedp2z1($data->chucktableseedp2z1);
$efai003->setchucktableseedp2z2($data->chucktableseedp2z2);
$efai003->setchucktableseedp3z1($data->chucktableseedp3z1);
$efai003->setchucktableseedp3z2($data->chucktableseedp3z2);
$efai003->setsetupwafer($data->setupwafer);
$efai003->setfirstwaferinspection($data->firstwaferinspection);
$efai003->setfirstwaferno($data->firstwaferno);
$efai003->setmptechemp($data->mptechemp);
$efai003->setmpqcemp($data->mpqcemp);
$efai003->setremarks($data->remarks);
$efai003->setlastupdatedby($_SESSION['idno']);
$efai003->setlastupdate(date("Y-m-d h:i:s"));
$efai003->setactive(1);

$success = $efai003->AddeFAI003();

if($success == true)
{

    if($rave)
    {
        $roughness = new Roughness;

        $roughness->setintlotno($intlotno);
        $roughness->setcustcode($intlotdata2->custcode);
        $roughness->setstation('003');
        $roughness->setr1($rpoint1);
        $roughness->setr2($rpoint2);
        $roughness->setr3($rpoint3);
        $roughness->setr4($rpoint4);
        $roughness->setr5($rpoint5);
        $roughness->setrave($rave);
        $roughness->setlastupdate(date("Y-m-d h:i:s"));
        $roughness->setlastupdatedby($_SESSION['idno']);
        $roughness->AddRoughness();
    }

    if(count($stwaferno) > 0)
    {
        $thickness = new Thickness;

        for($x=0;$x<count($stwaferno);$x++){
            $thickness->setintlotno($intlotno);
            $thickness->setcustcode($intlotdata2->custcode);
            $thickness->setwaferno($stwaferno[$x]);
            $thickness->setstation('003');
            $thickness->setp1($stpoint1[$x]);
            $thickness->setp2($stpoint2[$x]);
            $thickness->setp3($stpoint3[$x]);
            $thickness->setp4($stpoint4[$x]);
            $thickness->setp5($stpoint5[$x]);
            $thickness->setpave($spave[$x]);
            $thickness->setttv($sttv[$x]);
            $thickness->setlastupdate(date("Y-m-d h:i:s"));
            $thickness->setlastupdatedby($_SESSION['idno']);
            $thickness->AddThickness();
        }
    }

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('003');
            $reject->setmachine($data->machine);
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d h:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }
    }
    $ilot = new IntLotno;
    $ilot->updateBRM($intlotno,$intlotdata2->custcode,$data->faicat);

    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>