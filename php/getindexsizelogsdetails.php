<?php 
include_once("../classes/indexsize.php");
session_start();

$data = indexsize::TrackGetDetails($_GET['trackingno']);
$lotlogsdata = json_encode($data[0]);
$lotlogsdata2 = json_decode($lotlogsdata);

echo json_encode($data);

?>