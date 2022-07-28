<?php
include_once("../classes/efai011.php");
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
$efai011 = new efai011();

$efai011->setcustcode($intlotdata2->custcode);
$efai011->setintlot($intlotno);
$efai011->setwswr($data->wswr);
$efai011->setswrno($data->swrno);
$efai011->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai011->setsamplingplan($data->samplingplan);
$efai011->setsamplingsize($data->samplingsize);
$efai011->setremarks($data->remarks);
$efai011->setlastupdatedby($_SESSION['idno']);
$success = $efai011->Addefai011();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>