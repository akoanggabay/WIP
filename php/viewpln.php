<?php 
include_once("../classes/partslotno.php");
include_once("../classes/partslogs.php");
session_start();
//echo $_GET['intlotno'];
$Partslotno = partslotno::GetDetails($_GET['partslotno']);
$Partslotlogs = partslogs::GetAllPartsLogs($_GET['partslotno']);

echo json_encode($Partslotno).'_'.json_encode($Partslotlogs);

?>