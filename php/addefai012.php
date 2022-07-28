<?php
include_once("../classes/efai012.php");
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
$efai012 = new efai012();

$efai012->setcustcode($intlotdata2->custcode);
$efai012->setintlot($intlotno);
$efai012->setwswr($data->wswr);
$efai012->setswrno($data->swrno);
$efai012->settally($data->tally);
$efai012->setqtyouttally($data->qtyouttally);
$efai012->setdetailsattached($data->detailsattached);
$efai012->setcanisterused($data->canisterused);
$efai012->setcanisternoused($data->canisternoused);
$efai012->setproperlyvacuum($data->properlyvacuum);
$efai012->setremarks($data->remarks);
$efai012->setlastupdatedby($_SESSION['idno']);
$success = $efai012->Addefai012();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>