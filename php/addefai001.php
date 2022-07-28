<?php
include_once("../classes/efai001.php");
include_once("../classes/intlotno.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

/* $intlotno = $_GET['intlotno'];
$wswr = $_GET['wswr'];
$swrno = $_GET['swrno'];
$wafercondition = $_GET['wafercondition'];
$wafertype = $_GET['wafertype'];
$initialthickness = $_GET['initialthickness'];
$heightmeasurement = $_GET['heightmeasurement'];
$warpage = $_GET['warpage'];
$waferboatslotting = $_GET['waferboatslotting'];
$highmaginspectionrequired = $_GET['highmaginspectionrequired'];
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
$efai001 = new efai001();

$efai001->setcustcode($intlotdata2->custcode);
$efai001->setintlot($intlotno);
$efai001->setwswr($data->wswr);
$efai001->setswrno($data->swrno);
$efai001->setwafercondition($data->wcondition);
$efai001->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai001->setinitialthickness($data->initialthickness);
$efai001->setheightmeasurement($data->heightmeasurement);
$efai001->setwarpage($data->warpage);
$efai001->setwaferboatslotting($data->waferboatslotting);
$efai001->sethighmaginspectionrequired($data->highmaginspectionrequired);
$efai001->setremarks($data->remarks);
$efai001->setlastupdatedby($_SESSION['idno']);
$success = $efai001->AddeFAI001();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>