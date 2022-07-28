<?php
include_once("../classes/efai005.php");
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
$efai005 = new efai005();

$efai005->setcustcode($intlotdata2->custcode);
$efai005->setintlot($intlotno);
$efai005->setwswr($data->wswr);
$efai005->setswrno($data->swrno);
$efai005->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai005->sethighmaginspection($data->highmaginspection);
$efai005->setwafernoinspected($data->wafernoinspected);
$efai005->setremarks($data->remarks);
$efai005->setlastupdatedby($_SESSION['idno']);
$success = $efai005->AddeFAI005();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>