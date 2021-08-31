<?php 
include_once("../classes/custlotno.php");
session_start();

$data = CustLotno::GetDetails($_GET['custlotno']);

echo json_encode($data);

?>