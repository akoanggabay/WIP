<?php
include_once("../classes/po.php");
session_start();


$custcode = $_GET['custcode'];
$pono = $_GET['pono'];
$qty = $_GET['qty'];
$processcat = $_GET['processcat'];
$subprocesscat = $_GET['subprocesscat'];


$exist = PO::checkExist($custcode,$pono);

if($_SESSION['idno'])
{
    if($exist == 'true')
    {
        echo 'error_<b>Error!</b> '.$_GET['pono'].' already exist on our Database!';
    }
    else
    {
        $PO = new PO();
        $PO->setpono($pono);
        $PO->setcustcode($custcode);
        $PO->setqty($qty);
        $PO->setprocesscat($processcat);
        $PO->setsubprocesscat($subprocesscat);
        $PO->setstatus('OPEN');
        $PO->setlastupdatedby($_SESSION['idno']);
        $success = $PO->addPO();

        if($success == true)
        {
            echo 'success_<b>Success!</b> '.$pono.' successfully added!';
        }
        else
        {
            echo "error_Can't Connect to Database!";
        }

    }
}
else
{
    echo 'session_Login session timeout!';
}

?>