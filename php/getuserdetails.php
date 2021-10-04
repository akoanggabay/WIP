<?php 
include_once("../classes/user.php");
session_start();

$data = User::UserDetails($_GET['idno']);

echo json_encode($data);

?>