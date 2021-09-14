<?php
include_once("../classes/processroute.php");
session_start();
	//$account = trim($_SESSION['account']);
	$processcat = $_GET['processcat'];
	$result = "";

	//$Module = new Module;
	$route = ProcessRoute::GetProcessRoute($processcat);
    //echo $Modules[0];
	for($i=0;$i<count($route);$i++){
		
		$result .= $route[$i]->getstation()."_";
        //echo $company;
	}
	echo $result;



?>