<?php
include_once("../classes/intlotno.php");
session_start();
	
$last = IntLotno::getLastILN();

echo $last;



?>