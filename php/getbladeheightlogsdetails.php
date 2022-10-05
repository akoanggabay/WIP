<?php 
include_once("../classes/bladeheight.php");
session_start();

$data = bladeheight::TrackGetDetails($_GET['trackingno']);
$lotlogsdata = json_encode($data[0]);
$lotlogsdata2 = json_decode($lotlogsdata);

echo json_encode($data);

?>