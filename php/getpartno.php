<?php
include_once("../classes/partno.php");
session_start();
	//$account = trim($_SESSION['account']);
	$processcat = $_GET['processcat'];
	$materialcat = $_GET['materialcat'];
	$result = "";

	//$Module = new Module;
	$partno = Partno::GetPartno($processcat,$materialcat);
    //echo $Modules[0];
	for($i=0;$i<count($partno);$i++){
		
		$result .= $partno[$i]->getcode()."_";
        //echo $company;
	}
	echo $result;



?>