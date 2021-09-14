<?php 
include_once("../classes/intlotno.php");
session_start();

$data = IntLotno::GetAllPOLotno($_GET['pono']);

echo json_encode($data);

?>