<?php
include_once("../classes/po.php");
session_start();

$pono = $_GET['pono'];
$remarks = $_GET['remarks'];
//echo $pono;

if($_SESSION['idno'])
{
    $po = new PO;

    $po->setstatus('CLOSED');
    $po->setpono($pono);
    $po->setremarks($remarks);
    $po->setlastupdatedby($_SESSION['idno']);
    $po->ForceClosePO();

    echo 'success_PO number: <b>'.$pono.'</b> successfully closed!';

}
else
{
    echo 'session_Login session timeout!';
}




?>