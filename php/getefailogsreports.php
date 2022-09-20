<?php 
include_once("../classes/efailogs.php");
session_start();

$efailogs = new efailogs;
$start = date_format(date_create($_GET['start']),"Y-m-d H:i:s");
$end = date_format(date_create($_GET['end']),"Y-m-d H:i:s");
$station = $_GET['station'];


$data = $efailogs->geteFAILogs(substr($station,0,3),$start,$end);
//print_r($data);
echo (json_encode($data));
/* $test2 = json_encode($test);
$test3 = json_decode($test2); */
/* echo $test3; */
/* foreach($data[0] as $key => $value)
{
    print($key." ".$value);
} */

?>