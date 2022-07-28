<?php
include_once("../classes/efai002.php");
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
$efai002 = new efai002();

$efai002->setcustcode($intlotdata2->custcode);
$efai002->setintlot($intlotno);
$efai002->setmachine($data->machine);
$efai002->setfaicat($data->faicat);
$efai002->setwswr($data->wswr);
$efai002->setswrno($data->swrno);
$efai002->setwafercondition($data->wcondition);
$efai002->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai002->setwaferboatslotting($data->waferboatslotting);
$efai002->setchucktabletype($data->chucktabletype);
$efai002->setchucktablecleaning($data->chucktablecleaning);
$efai002->setprocessmode($data->processmode);
$efai002->setchangetape($data->changetape);
$efai002->setbgtapetype($data->bgtapetype);
$efai002->setbgtapeused($data->bgtapeused);
$efai002->setbgtapelotno($data->bgtapelotno);
$efai002->setbgtapeexpdate($data->bgtapeexpdate);
$efai002->setnotchtype($data->notchtype);
$efai002->setchangeblade($data->changeblade);
$efai002->setbladetemp($data->bladetemp);
$efai002->setbladecount($data->bladecount);
$efai002->setsetupwafer($data->setupwafer);
$efai002->setfirstwaferinspection($data->firstwaferinspection);
$efai002->setfirstwaferno($data->firstwaferno);
$efai002->setchucktablecleaning($data->chucktablecleaning);
$efai002->setmpbgtapeinstallation($data->mpbgtapeinstallation);
$efai002->setmpbgtaperollercleaning($data->mpbgtaperollercleaning);
$efai002->setmpbladeposition($data->mpbladeposition);
$efai002->setmplamphourusage($data->mplamphourusage);
$efai002->setmptechemp($data->mptechemp);
$efai002->setmpqcemp($data->mpqcemp);
$efai002->setremarks($data->remarks);
$efai002->setlastupdatedby($_SESSION['idno']);

$success = $efai002->AddeFAI002();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>