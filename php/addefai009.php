<?php
include_once("../classes/efai009.php");
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
$efai009 = new efai009();

$efai009->setcustcode($intlotdata2->custcode);
$efai009->setintlot($intlotno);
$efai009->setwswr($data->wswr);
$efai009->setswrno($data->swrno);
$efai009->setloaderplateclean($data->loaderplateclean);
$efai009->setuvirradtime($data->uvirradtime);
$efai009->setbustedlamp($data->bustedlamp);
$efai009->setlamphourusage($data->lamphourusage);
$efai009->setrequireduvdosage($data->requireduvdosage);
$efai009->setactualuvdosage($data->actualuvdosage);
$efai009->setwafernouvcuring($data->wafernouvcuring);
$efai009->setreasonuvcuring($data->reasonuvcuring);
$efai009->settechemp($data->techemp);
$efai009->setqcemp($data->qcemp);
$efai009->setremarks($data->remarks);
$efai009->setmachine($data->machine);
$efai009->setfaicat($data->faicat);
$efai009->setlastupdatedby($_SESSION['idno']);
$success = $efai009->Addefai009();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>