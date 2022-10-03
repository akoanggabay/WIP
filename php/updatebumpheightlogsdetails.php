<?php 
include_once("../classes/bumpheight.php");
session_start();

$bumpheight = new BumpHeight;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$bumpheight->setwaferno($data->waferno);
$bumpheight->setp1($data->p1);
$bumpheight->setp2($data->p2);
$bumpheight->setp3($data->p3);
$bumpheight->setp4($data->p4);
$bumpheight->setp5($data->p5);



if($_SESSION['idno'])
{
    $success = $bumpheight->UpdateBumpHeight($trackingno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Bump height logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>