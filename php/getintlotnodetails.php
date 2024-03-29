<?php 
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/station.php");
include_once("../classes/roughness.php");
include_once("../classes/thickness.php");
include_once("../classes/reject.php");
include_once("../classes/processroute.php");
session_start();

$exist = IntLotno::checkExist($_GET['intlotno']);

if($exist == 'false')
{
    echo "error_Internal Lot number does not exist!";
    return false;
}

if(!$_SESSION['idno'])
{
    echo 'error_Login session timeout!';
    return false;
}

$lotdata = IntLotno::GetDetails($_GET['intlotno']); // Internal lot number details
$Intlotlogs = IntLotLogs::GetAllIntLogs($_GET['intlotno']); // Internal lot number logs details
$Intrlogs = Roughness::GetAllRoughnessLogs($_GET['intlotno']); // Internal lot number roughness logs details
$Inttlogs = Thickness::GetAllThicknessLogs($_GET['intlotno']); // Internal lot number thickness logs details
$Intrejlogs = Reject::GetAllIntRejLogs($_GET['intlotno']); // Internal lot number reject details
$intlotdata = json_encode($lotdata[0]); // Internal lot number details Json encoding 
$intlotdata2 = json_decode($intlotdata); // Internal lot number details json decoding 

$processroute = new ProcessRoute; // Instantiate ProcessRoute class

$processroute->setstation($intlotdata2->station);
$processroute->setprocess($intlotdata2->processcat);

$processroute->getStationDetails();

$nextstage = ProcessRoute::getnextstage($intlotdata2->processcat,$processroute->getflowsequence());

$processroute->setstation($nextstage);
$processroute->setprocess($intlotdata2->processcat);
$processroute->getStationDetails();
$stationdetails = new Station;

$stationdetails->StationDetails($nextstage);

$logsdata = IntLotLogs::GetDetails($_GET['intlotno'],$nextstage);
$intlogsdata = json_encode($logsdata[0]);
$intlogsdata2 = json_decode($intlogsdata);
//echo $intlotdata2->status;

if($intlotdata2->status == 'HOLD')
{
    echo "error_Internal Lot number is on HOLD status!";
    return false;
}
if($intlotdata2->status == 'DONE')
{
    echo 'success_'.json_encode($lotdata).'_'.json_encode($Intlotlogs).'_'.json_encode($Intrlogs).'_'.json_encode($Inttlogs).'_'.json_encode($Intrejlogs);
}
else if($intlotdata2->status == 'ON PROCESS')
{
    echo 'onprosucc_'.json_encode($lotdata).'_Internal Lot number: <b>'.$intlotdata2->intlot.'</b> is still on process at <b>'.$stationdetails->getstation().':'.$stationdetails->getdescription().'</b><br/>Date In: <b>'.@$intlogsdata2->datein.'</b><br/>Quantity In: <b>'.@$intlogsdata2->qtyin.'</b><br/>Cassette number: <b>'.@$intlogsdata2->cassno.'</b><br/>Operator/Inspector: <b>'.@$intlogsdata2->name.'_'.@$intlogsdata2->lastupdatedby.'_'.$stationdetails->getstation().':'.$stationdetails->getdescription().'_'.$processroute->getforbackgrind().'_'.json_encode($Intlotlogs).'_'.json_encode($Intrlogs).'_'.json_encode($Inttlogs).'_'.json_encode($Intrejlogs);

   /*  if(@$intlogsdata2->lastupdatedby == $_SESSION['idno'])
    {
        echo 'onprosucc_'.json_encode($lotdata).'_Internal Lot number: <b>'.$intlotdata2->intlot.'</b> is still on process at <b>'.$stationdetails->getstation().':'.$stationdetails->getdescription().'</b><br/>Date In: <b>'.@$intlogsdata2->datein.'</b><br/>Quantity In: <b>'.@$intlogsdata2->qtyin.'</b><br/>Cassette number: <b>'.@$intlogsdata2->cassno.'</b><br/>Operator/Inspector: <b>'.@$intlogsdata2->name.'_'.@$intlogsdata2->lastupdatedby.'_'.$stationdetails->getstation().':'.$stationdetails->getdescription().'_'.$processroute->getforbackgrind();
    }
    else
    {
        echo 'error_'.json_encode($lotdata).'_Internal Lot number: <b>'.$intlotdata2->intlot.'</b> is still on process at <b>'.$stationdetails->getstation().':'.$stationdetails->getdescription().'</b><br/>Date In: <b>'.@$intlogsdata2->datein.'</b><br/>Quantity In: <b>'.@$intlogsdata2->qtyin.'</b><br/>Cassette number: <b>'.@$intlogsdata2->cassno.'</b><br/>Operator/Inspector: <b>'.@$intlogsdata2->name.'_'.@$intlogsdata2->lastupdatedby.'_'.$stationdetails->getstation().':'.$stationdetails->getdescription().'_'.$processroute->getforbackgrind();
    } */
}



?>