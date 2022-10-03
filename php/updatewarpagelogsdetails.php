<?php 
include_once("../classes/warpage.php");
session_start();

$warpage = new Warpage;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$warpage->setwaferno($data->waferno);
$warpage->setp1($data->p1);
$warpage->setp2($data->p2);
$warpage->setp3($data->p3);
$warpage->setp4($data->p4);
$warpage->setp5($data->p5);



if($_SESSION['idno'])
{
    $success = $warpage->UpdateWarpage($trackingno);
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