<?php 
include_once("../classes/inkdotheight.php");
session_start();

$inkdotheight = new InkDotHeight;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$inkdotheight->setwaferno($data->waferno);
$inkdotheight->setp1($data->p1);
$inkdotheight->setp2($data->p2);
$inkdotheight->setp3($data->p3);
$inkdotheight->setp4($data->p4);
$inkdotheight->setp5($data->p5);



if($_SESSION['idno'])
{
    $success = $inkdotheight->UpdateInkDotHeight($trackingno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Ink dot height logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>