<?php
include_once("../classes/machine.php");
session_start();
	//$account = trim($_SESSION['account']);
	$processcat = $_GET['processcat'];
    $station = $_GET['station'];
	$result = "";

	//$Module = new Module;
	$machine = Machine::GetMachineStation($processcat,$station);
    //echo $Modules[0];
	for($i=0;$i<count($machine);$i++){
		
		$result .= $machine[$i]->getmachineid()."_";
        //echo $company;
	}
	echo $result;



?>