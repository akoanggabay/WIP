<?php 
include_once("../classes/subprocesscat.php");
session_start();

$data = SubProcessCat::GetDetails($_GET['processcat']);
if($data != 'false')
{
    echo json_encode($data);
}
else if($data == 'false')
{
    echo $data;
}
else
{
    echo 'error_Error Connecting to database!';
}


?>