<?php 
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/station.php");
include_once("../classes/processroute.php");
session_start();

$lotdata = IntLotno::GetDetails($_GET['intlotno']);
$intlotdata = json_encode($lotdata[0]);
$intlotdata2 = json_decode($intlotdata);

$processroute = new ProcessRoute;

$processroute->setstation($intlotdata2->station);
$processroute->setprocess($intlotdata2->processcat);

$processroute->getStationDetails();

$nextstage = ProcessRoute::getnextstage($intlotdata2->processcat,$processroute->getflowsequence());

$stationdetails = new Station;

$stationdetails->StationDetails($nextstage);

$logsdata = IntLotLogs::GetDetails($_GET['intlotno'],$nextstage);
$intlogsdata = json_encode($logsdata[0]);
$intlogsdata2 = json_decode($intlogsdata);

if($intlotdata2->status == 'PROCESSED')
{
    echo 'success_'.json_encode($lotdata);
}
else if($intlotdata2->status == 'ON PROCESS')
{
    echo 'error_'.json_encode($lotdata).'_Internal Lot number: <b>'.$intlotdata2->intlot.'</b> is still on process at <b>'.$stationdetails->getstation().':'.$stationdetails->getdescription().'</b><br/>Date In: <b>'.@$intlogsdata2->datein.'</b><br/>Quantity In: <b>'.@$intlogsdata2->qtyin.'</b><br/>Wafer number: <b>'.@$intlogsdata2->waferno.'</b><br/>Wafer run: <b>'.@$intlogsdata2->waferrun.'</b><br/>Inspected By: <b>'.@$intlogsdata2->name.'_'.@$intlogsdata2->lastupdatedby.'_'.$stationdetails->getstation().':'.$stationdetails->getdescription();
}



?>