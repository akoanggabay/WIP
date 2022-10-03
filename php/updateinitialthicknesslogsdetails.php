<?php 
include_once("../classes/initialthickness.php");
session_start();

$initialthickness = new InitialThickness;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$initialthickness->setwaferno($data->waferno);
$initialthickness->setp1($data->p1);
$initialthickness->setp2($data->p2);
$initialthickness->setp3($data->p3);
$initialthickness->setp4($data->p4);
$initialthickness->setp5($data->p5);



if($_SESSION['idno'])
{
    $success = $initialthickness->UpdateInitialThick($trackingno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Initial Thickness logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>