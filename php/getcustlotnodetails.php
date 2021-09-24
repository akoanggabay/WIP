<?php 
include_once("../classes/custlotno.php");
include_once("../classes/processroute.php");
session_start();

$data = CustLotno::GetDetails($_GET['custlotno'],$_GET['custcode']);
$custlotdata = json_encode($data[0]);
$custlotdata2 = json_decode($custlotdata);

$result = "";

	//$Module = new Module;
	$route = ProcessRoute::GetProcessRoute2($custlotdata2->processcat);
    //echo $Modules[0];
	for($i=0;$i<count($route);$i++){
		
		$result .= $route[$i]->getstation()."_";
        //echo $company;
	}
	//echo $result;

echo json_encode($data).'`'.$result;

?>