<?php
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/station.php");
include_once("../classes/processroute.php");
session_start();


$intlotno = $_GET['intlotno'];


$data = IntLotno::GetDetails($intlotno);
$intlotdata = json_encode($data[0]);
$intlotdata2 = json_decode($intlotdata);

$processroute = new ProcessRoute;

$processroute->setstation($intlotdata2->station);
$processroute->setprocess($intlotdata2->processcat);

$processroute->getStationDetails();

$nextstage = ProcessRoute::getnextstage($intlotdata2->processcat,$processroute->getflowsequence());
$stationdetails = new Station;

$stationdetails->StationDetails($nextstage);
if($_SESSION['idno'])
{
    if($intlotdata2->status == 'HOLD')
    {
        $intlotlogs = new IntLotLogs;
        
        $intlotlogs->setcustcode($intlotdata2->custcode);
        $intlotlogs->setintlot($intlotno);
        $intlotlogs->setstation($nextstage);
        $intlotlogs->setmachine('');
        $intlotlogs->setqtyin($intlotdata2->currqty);
        $intlotlogs->setdatein(date("Y-m-d h:i:sa"));
        $intlotlogs->setlastupdatedby($_SESSION['idno']);
        $intlotlogs->setstatus('RELEASED');
        $intlotlogs->setwaferno('');
        $intlotlogs->setwaferrun('');

        $success = $intlotlogs->AddIntLotLogs();

        $ilot = new IntLotno;

        $ilot->setstatus('PROCESSED');
        $ilot->setcustcode($intlotdata2->custcode);
        $ilot->setintlotno($intlotno);

        $ilot->updateStatus();

        echo 'success_Internal Lot number: <b>'.$intlotno.'</b> successfully released in <b>'.date('F j, Y, g:i a');
    }
    else if($intlotdata2->status == 'ON PROCESS')
    {
        echo 'error_<b>Error! '.$intlotno.' is still ON PROCESS at '.$nextstage.':'.$stationdetails->getdescription().' station';
    }
    else if($intlotdata2->status == 'EMPTY')
    {
        echo 'error_<b>Error! '.$intlotno.' is already empty! </b>';
    }
    else if($intlotdata2->status == 'PROCESSED')
    {
        echo 'error_<b>Error! '.$intlotno.' is not on HOLD status! </b>';
    }
    else
    {
        echo 'error_<b>Error! Cannot process Internal Lot number: '.$intlotno.'</b>';
    }
}
else
{
    echo 'session_Session login expired!';
}


?>