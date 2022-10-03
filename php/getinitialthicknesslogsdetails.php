<?php 
include_once("../classes/initialthickness.php");
session_start();

$data = InitialThickness::TrackGetDetails($_GET['trackingno']);
$lotlogsdata = json_encode($data[0]);
$lotlogsdata2 = json_decode($lotlogsdata);

echo json_encode($data);

?>