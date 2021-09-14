<?php 
include_once("../classes/intlotlogs.php");
session_start();

$data = IntLotLogs::GetAllIntLogs($_GET['intlotno']);

echo json_encode($data);

?>