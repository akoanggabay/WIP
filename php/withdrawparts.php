<?php 
include_once("../classes/partslotno.php");
include_once("../classes/partslogs.php");

session_start();

$lotno = $_GET['lotno'];
$qty = $_GET['qty'];

$exist = partslotno::checkExist($lotno);

if($exist == 'false')
{
    echo "error_Parts Lot number does not exist!";
    return false;
}

$partslotno = new partslotno;
$partslogs = new partslogs;

$partslotno->setlotno($lotno);
$partslotno->setlastupdatedby($_SESSION['idno']);

$success = $partslotno->WithdrawParts($qty);

if($success)
{   
    $partslogs->setlotno($lotno);
    $partslogs->setqty($qty);
    $partslogs->setlastupdate(date("Y-m-d h:i:s"));
    $partslogs->setlastupdatedby($_SESSION['idno']);
    $partslogs->setremarks('');
    
    $partslogs->AddPartsLogs();
}


echo 'success_Transaction Successful!';




?>