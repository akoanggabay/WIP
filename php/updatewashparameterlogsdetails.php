<?php 
include_once("../classes/washparameter.php");
session_start();

$washparameter = new washparameter;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$washparameter->settime($data->time);
$washparameter->setrpm($data->rpm);

if($_SESSION['idno'])
{
    $success = $washparameter->UpdateWashparameter($trackingno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Wash parameter logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>