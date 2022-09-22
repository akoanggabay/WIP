<?php 
include_once("../classes/partslotno.php");
session_start();

$data = partslotno::GetAllPNLotno($_GET['partno']);

echo json_encode($data);

?>