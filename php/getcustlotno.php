<?php
include_once("../classes/custlotno.php");
session_start();
	//$account = trim($_SESSION['account']);
	$custcode = $_GET['custcode'];
	$result = "";

	//$Module = new Module;
	$custlotno = CustLotno::GetAllCustLotno($custcode);
    //echo $Modules[0];
	for($i=0;$i<count($custlotno);$i++){
		
		$result .= $custlotno[$i]->getcustlotno()."_";
        //echo $company;
	}
	echo $result;



?>