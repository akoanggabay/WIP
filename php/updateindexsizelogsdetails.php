<?php 
include_once("../classes/indexsize.php");
session_start();

$indexsize = new indexsize;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$indexsize->setch($data->ch);
$indexsize->setis1($data->is1);
$indexsize->setis2($data->is2);
$indexsize->setis3($data->is3);
$indexsize->setis4($data->is4);
$indexsize->setis5($data->is5);



if($_SESSION['idno'])
{
    $success = $indexsize->UpdateIndexsize($trackingno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Index size logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>