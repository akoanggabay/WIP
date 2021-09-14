<?php 
include_once("../classes/intlotlogs.php");
session_start();

/* echo $_GET['start'];
echo $_GET['end']; */
$start = date_format(date_create($_GET['start']),"Y-m-d H:i");
$end = date_format(date_create($_GET['end']),"Y-m-d H:i");
$data = IntLotLogs::GetAllIntLogsReports($start,$end);

echo json_encode($data);

?>