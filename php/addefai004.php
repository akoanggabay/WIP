<?php
include_once("../classes/efai004.php");
include_once("../classes/intlotno.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);


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

//echo $intlotdata2->custcode;
$efai004 = new efai004();

$efai004->setcustcode($intlotdata2->custcode);
$efai004->setintlot($intlotno);
$efai004->setmachine($data->machine);
$efai004->setfaicat($data->faicat);
$efai004->setwswr($data->wswr);
$efai004->setswrno($data->swrno);
$efai004->setslotting($data->slotting);
$efai004->setchucktablecleaning($data->chucktablecleaning);
$efai004->setprocessmode($data->processmode);
$efai004->setbgtapetype($data->bgtapetype);
$efai004->setbgtapeused($data->bgtapeused);
$efai004->setbgtapestaging($data->bgtapestaging);
$efai004->settabletemp($data->tabletemp);
$efai004->setuvlight($data->uvlight);
$efai004->setchangedetapetape($data->changedetapetape);
$efai004->setdetapingtapeused($data->detapingtapeused);
$efai004->setdetapingtapeexpdate($data->detapingtapeexpdate);
$efai004->setdetapingtapelotno($data->detapingtapelotno);
$efai004->setnotchtype($data->notchtype);
$efai004->setsetupwafer($data->setupwafer);
$efai004->setfirstwaferinspection($data->firstwaferinspection);
$efai004->setfirstwaferno($data->firstwaferno);
$efai004->setdetapingtaperoller($data->detapingtaperoller);
$efai004->setdetapingtapeinstallation($data->detapingtapeinstallation);
$efai004->settapewindingpressure($data->tapewindingpressure);
$efai004->settapedeliverypressure($data->tapedeliverypressure);
$efai004->setlamphourusage($data->lamphourusage);
$efai004->settechemp($data->techemp);
$efai004->setqcemp($data->qcemp);
$efai004->setremarks($data->remarks);
$efai004->setuvirrad($data->uvirrad);
$efai004->setlastupdatedby($_SESSION['idno']);

$success = $efai004->Addefai004();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>