<?php
include_once("../classes/efai007.php");
include_once("../classes/intlotno.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

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
$efai007 = new efai007();

$efai007->setcustcode($intlotdata2->custcode);
$efai007->setintlot($intlotno);
$efai007->setmounttype($data->mounttype);
$efai007->setmachine($data->machine);
$efai007->setfaicat($data->faicat);
$efai007->setwswr($data->wswr);
$efai007->setswrno($data->swrno);
$efai007->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai007->setrequiredwaferthickness($data->requiredwaferthickness);
$efai007->setactualwaferthickness($data->actualwaferthickness);
$efai007->setrequiredwaferorientation($data->requiredwaferorientation);
$efai007->setactualwaferorientation($data->actualwaferorientation);
$efai007->setprocessmode($data->processmode);

$efai007->setchucktablechange($data->chucktablechange);
$efai007->setchuckplateclean($data->chuckplateclean);
$efai007->setchucktabletype($data->chucktabletype);
$efai007->setchucktabletemp($data->chucktabletemp);
$efai007->setchucktablesize($data->chucktablesize);

$efai007->setdicingtapechange($data->dicingtapechange);
$efai007->setdicingtapetype($data->dicingtapetype);
$efai007->setdicingtapesize($data->dicingtapesize);
$efai007->setdicingtapeinstallation($data->dicingtapeinstallation);
$efai007->setdicingtapeused($data->dicingtapeused);
$efai007->setdicingtapelotno($data->dicingtapelotno);
$efai007->setdicingtapeexp($data->dicingtapeexp);

$efai007->setbladechange($data->bladechange);
$efai007->setbladecount($data->bladecount);
$efai007->setbladeposition($data->bladeposition);

$efai007->setringframeclean($data->ringframeclean);
$efai007->setlotpreheatprocess($data->lotpreheatprocess);
$efai007->settabletemprequired($data->tabletemprequired);
$efai007->settabletempactual($data->tabletempactual);

$efai007->setpreheatingtime($_GET['preheatingtime']);

$efai007->setmainairpressure($data->mainairpressure);
$efai007->setsetupwafer($data->setupwafer);
$efai007->setrollerpressure($data->rollerpressure);
$efai007->settechemp($data->techemp);
$efai007->setqcemp($data->qcemp);
$efai007->setremarks($data->remarks);
$efai007->setlastupdatedby($_SESSION['idno']);
$success = $efai007->AddeFAI007();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>