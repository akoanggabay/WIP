<?php 
include_once("../classes/partslogs.php");
session_start();

/* echo $_GET['start'];
echo $_GET['end']; */
$start = date_format(date_create($_GET['start']),"Y-m-d H:i");
$end = date_format(date_create($_GET['end']),"Y-m-d H:i");
$data = partslogs::GetAllPartsLogsReports($start,$end);

echo json_encode($data);

?>