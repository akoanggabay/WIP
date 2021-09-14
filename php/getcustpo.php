<?php
include_once("../classes/po.php");

session_start();
	//$account = trim($_SESSION['account']);
$custcode = $_GET['custcode'];
$result ="";

	//$Module = new Module;
	$custpo = PO::GetAllOpenPO($custcode);
    //echo $Modules[0];
	for($i=0;$i<count($custpo);$i++){
		
		$result .= $custpo[$i]->getpono()."_";
        //echo $company;
	}
	echo $result;



?>