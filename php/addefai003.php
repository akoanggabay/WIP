<?php
include_once("../classes/efai003.php");
include_once("../classes/intlotno.php");
include_once("../classes/thickness.php");
include_once("../classes/roughness.php");
include_once("../classes/reject.php");
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


//echo json_encode($data);
/* 
$intlotno = $_GET['intlotno'];
$machine = $_GET['machine'];
$faicat = $_GET['faicat'];
$wswr = $_GET['wswr'];
$swrno = $_GET['swrno'];
$wafercondition = $_GET['wafercondition'];
$wafertype = $_GET['wafertype'];
$waferboatslotting = $_GET['waferboatslotting'];
$chucktabletype = $_GET['chucktabletype'];
$chucktablecleaning = $_GET['chucktablecleaning'];
$processmode = $_GET['processmode'];
$changetape = $_GET['changetape'];
$bgtapetype = $_GET['bgtapetype'];
$bgtapeused = $_GET['bgtapeused'];
$bgtapelotno = $_GET['bgtapelotno'];
$bgtapeexpdate = $_GET['bgtapeexpdate'];
$notchtype = $_GET['notchtype'];
$changeblade = $_GET['changeblade'];
$bladetemperature = $_GET['bladetemperature'];
$bladecount = $_GET['bladecount'];
$setupwafer = $_GET['setupwafer'];
$firstwaferinspection = $_GET['firstwaferinspection'];
$firstwaferno = $_GET['firstwaferno'];
$mpchucktablecleaning = $_GET['mpchucktablecleaning'];
$mpbgtapeinstallation = $_GET['mpbgtapeinstallation'];
$mpbgtaperollercleaning = $_GET['mpbgtaperollercleaning'];
$mpbladeposition = $_GET['mpbladeposition'];
$mplamphourusage = $_GET['mplamphourusage'];
$mptechemp = $_GET['mptechemp'];
$mpqcemp = $_GET['mpqcemp'];
$remarks = $_GET['remarks']; */


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
    $roughness->setlastupdate(date("Y-m-d h:i:sa"));
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
        $thickness->setlastupdate(date("Y-m-d h:i:sa"));
        $thickness->setlastupdatedby($_SESSION['idno']);
        $thickness->AddThickness();
    }
}

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
$efai003->setbgtapestaged($data->bgtapestaged);
$efai003->setdiwatertemp($data->diwatertemp);
$efai003->setgrindingwheel($data->grindingwheel);
$efai003->setgrindingwheelusabletooth($data->grindingwheelusabletooth);
$efai003->setaircut($data->aircut);
$efai003->setspindlerpm($data->spindlerpm);
$efai003->setfeedratep1($data->feedratep1);
$efai003->setfeedratep2($data->feedratep2);
$efai003->setfeedratep3($data->feedratep3);
$efai003->setchucktableseedp1($data->chucktableseedp1);
$efai003->setchucktableseedp2($data->chucktableseedp2);
$efai003->setchucktableseedp3($data->chucktableseedp3);
$efai003->setsetupwafer($data->setupwafer);
$efai003->setfirstwaferinspection($data->firstwaferinspection);
$efai003->setfirstwaferno($data->firstwaferno);
$efai003->setmptechemp($data->mptechemp);
$efai003->setmpqcemp($data->mpqcemp);
$efai003->setremarks($data->remarks);
$efai003->setlastupdatedby($_SESSION['idno']);

$success = $efai003->AddeFAI003();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>