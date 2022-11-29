<?php 
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/roughness.php");
include_once("../classes/thickness.php");
include_once("../classes/reject.php");
session_start();
//echo $_GET['intlotno'];
$Intlotno = IntLotno::GetDetails($_GET['intlotno']);
$Intlotlogs = IntLotLogs::GetAllIntLogs($_GET['intlotno']);
$Intrlogs = Roughness::GetAllRoughnessLogs($_GET['intlotno']);
$Inttlogs = Thickness::GetAllThicknessLogsWithDummy($_GET['intlotno']);
$Intrejlogs = Reject::GetAllIntRejLogs($_GET['intlotno']);

echo json_encode($Intlotno).'_'.json_encode($Intlotlogs).'_'.json_encode($Intrlogs).'_'.json_encode($Inttlogs).'_'.json_encode($Intrejlogs);

?>