<?php
include_once("../classes/intlotno.php");
session_start();
	//$account = trim($_SESSION['account']);
	$custcode = $_GET['custcode'];
	$processcat = $_GET['processcat'];
	$result = "";

	//$Module = new Module;
	$intlotno = IntLotno::GetAllIntLotno($custcode,$processcat);
    //echo $Modules[0];
	for($i=0;$i<count($intlotno);$i++){
		
		$result .= $intlotno[$i]->getintlotno()."_";
        //echo $company;
	}
	echo $result;



?>