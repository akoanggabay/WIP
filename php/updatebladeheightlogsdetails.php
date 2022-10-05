<?php 
include_once("../classes/bladeheight.php");
session_start();

$bladeheight = new bladeheight;

$trackingno = $_GET['trackingno'];
$data = json_decode($_GET['data']);

$bladeheight->setch($data->ch);
$bladeheight->setbh1($data->bh1);
$bladeheight->setbh2($data->bh2);
$bladeheight->setbh3($data->bh3);
$bladeheight->setbh4($data->bh4);
$bladeheight->setbh5($data->bh5);



if($_SESSION['idno'])
{
    $success = $bladeheight->UpdateBladeheight($trackingno);
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