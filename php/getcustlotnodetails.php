<?php 
include_once("../classes/custlotno.php");
session_start();

$data = CustLotno::GetDetails($_GET['custlotno'],$_GET['custcode']);

echo json_encode($data);

?>