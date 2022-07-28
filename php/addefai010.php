<?php
include_once("../classes/efai010.php");
include_once("../classes/intlotno.php");
session_start();

$intlotno = $_GET['intlotno'];
$inkexpdate = $_GET['inkexpdate'];
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
$efai010 = new efai010();

$efai010->setcustcode($intlotdata2->custcode);
$efai010->setintlot($intlotno);
$efai010->setwswr($data->wswr);
$efai010->setswrno($data->swrno);
$efai010->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai010->setinktype($data->inktype);
$efai010->setinkused($data->inkused);
$efai010->setinkexpdate(@$inkexpdate ? @$inkexpdate : '1900-01-01');
$efai010->setinkexpired($data->inkexpired);
$efai010->setinkviresult($data->inkviresult);
$efai010->setinspectiontype($data->inspectiontype);
$efai010->setremarks($data->remarks);
$efai010->setlastupdatedby($_SESSION['idno']);
$success = $efai010->Addefai010();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>