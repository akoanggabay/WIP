<?php
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/station.php");
include_once("../classes/processroute.php");
session_start();


$intlotno = $_GET['intlotno'];
$station = $_GET['station'];
$waferno = $_GET['waferno'];
$waferrun = $_GET['waferrun'];
$machine = $_GET['machine'];
$processcat = $_GET['processcat'];






$data = IntLotno::GetDetails($intlotno);
$intlotdata = json_encode($data[0]);
$intlotdata2 = json_decode($intlotdata);

$processroute = new ProcessRoute;

$processroute->setstation($intlotdata2->station);
$processroute->setprocess($processcat);

$processroute->getStationDetails();

$nextstage = ProcessRoute::getnextstage($processcat,$processroute->getflowsequence());
$stationdetails = new Station;

$stationdetails->StationDetails($nextstage);
if($_SESSION['idno'])
{
    if($nextstage == $station)
    {
        if($intlotdata2->status == 'PROCESSED')
        {
            $intlotlogs = new IntLotLogs;
            
            $intlotlogs->setcustcode($intlotdata2->custcode);
            $intlotlogs->setintlot($intlotno);
            $intlotlogs->setstation($station);
            $intlotlogs->setmachine($machine);
            $intlotlogs->setqtyin($intlotdata2->currqty);
            $intlotlogs->setdatein(date("Y-m-d h:i:sa"));
            $intlotlogs->setlastupdatedby($_SESSION['idno']);
            $intlotlogs->setstatus('ON PROCESS');
            $intlotlogs->setwaferno($waferno);
            $intlotlogs->setwaferrun($waferrun);

            $success = $intlotlogs->AddIntLotLogs();

            $ilot = new IntLotno;

            $ilot->setstatus('ON PROCESS');
            $ilot->setcustcode($intlotdata2->custcode);
            $ilot->setintlotno($intlotno);

            $ilot->updateStatus();

            echo 'success_Start date Inspection of Internal Lot number: <b>'.$intlotno.'</b> is at <b>'.date('F j, Y, g:i a');
        }
        else if($intlotdata2->status == 'HOLD')
        {
            echo 'error_<b>Error! '.$intlotno.' is at HOLD status </b>';
        }
        else if($intlotdata2->status == 'ON PROCESS')
        {
            echo 'error_<b>Error! '.$intlotno.' is still ON PROCESS at '.$nextstage.':'.$stationdetails->getdescription().' station';
        }
        else if($intlotdata2->status == 'EMPTY')
        {
            echo 'error_<b>Error! '.$intlotno.' is already empty! </b>';
        }
        else
        {
            echo 'error_<b>Error! Cannot process Internal Lot number: '.$intlotno.'</b>';
        }
    }
    else
    {
        echo 'error_<b>Error! Off route! '.$intlotno.'</b> is for <b>'.$nextstage.':'.$stationdetails->getdescription();
    }
}
else
{
    echo 'session_Session login expired!';
}


?>