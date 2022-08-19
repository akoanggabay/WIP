<?php
include_once("../classes/partslotno.php");
session_start();
	//$account = trim($_SESSION['account']);
	$partno = $_GET['partno'];
	$result = "";

	//$Module = new Module;
	$partslotno = partslotno::GetPartsLotno($partno);
    //echo $Modules[0];
	for($i=0;$i<count($partslotno);$i++){
		
		$result .= $partslotno[$i]->getlotno()."_";
        //echo $company;
	}
	echo $result;



?>