<?php 
include_once("../classes/ringcut.php");
session_start();

$ringcut = new ringcut;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$ringcut->setwaferno($data->waferno);
$ringcut->setmeasurement($data->measurement);

if($_SESSION['idno'])
{
    $success = $ringcut->UpdateRingcut($trackingno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Ring cut logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>