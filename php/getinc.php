<?php
include_once("../classes/station.php");
include_once("../classes/processroute.php");
session_start();


$station = $_GET['station'];
$processcat = $_GET['processcat'];

if($_SESSION['idno'])
{

        $processroute = new ProcessRoute;

        //$station = ProcessRoute::getincomingprocess($processcat);
        $processroute->setstation($station);
        $processroute->setprocess($processcat);

        $processroute->getStationDetails();
           
        echo $processroute->getforincoming();
        
    
}
else
{
    echo 'session_Session login expired!';
}


?>