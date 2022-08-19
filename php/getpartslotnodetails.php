<?php 
include_once("../classes/partslotno.php");

session_start();

$exist = partslotno::checkExist($_GET['lotno']);

if($exist == 'false')
{
    echo "error_Parts Lot number does not exist!";
    return false;
}

$lotdata = partslotno::GetDetails($_GET['lotno']);


echo 'success_'.json_encode($lotdata);




?>