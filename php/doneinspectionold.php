<?php
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/station.php");
include_once("../classes/thickness.php");
include_once("../classes/roughness.php");
include_once("../classes/reject.php");
include_once("../classes/processroute.php");
session_start();


$intlotno = $_GET['intlotno'];


$stwaferno = json_decode($_GET['stwaferno']);
$stpoint1 = json_decode($_GET['stpoint1']);
$stpoint5 = json_decode($_GET['stpoint5']);
$stpoint2 = json_decode($_GET['stpoint2']);
$stpoint3 = json_decode($_GET['stpoint3']);
$stpoint4 = json_decode($_GET['stpoint4']);
$sttv = json_decode($_GET['sttv']);
$spave = json_decode($_GET['spave']);


$rpoint1 = $_GET['rpoint1'];
$rpoint2 = $_GET['rpoint2'];
$rpoint3 = $_GET['rpoint3'];
$rpoint4 = $_GET['rpoint4'];
$rpoint5 = $_GET['rpoint5'];
$rave = $_GET['rave'];
$btnStat = $_GET['btnStat'];
$remarks = $_GET['remarks'];
$status = '';
$total = 0;
$brm = $_GET['brm'];

$sdwaferno = json_decode($_GET['sdwaferno']);
$sddetails = json_decode($_GET['sddetails']);
$sdqty = json_decode($_GET['sdqty']);
$sdremarks = json_decode($_GET['sdremarks']);

$data = IntLotno::GetDetails($intlotno);
$intlotdata = json_encode($data[0]);
$intlotdata2 = json_decode($intlotdata);

$processroute = new ProcessRoute;

$processroute->setstation($intlotdata2->station);
$processroute->setprocess($intlotdata2->processcat);

$processroute->getStationDetails();

$nextstage = ProcessRoute::getnextstage($intlotdata2->processcat,$processroute->getflowsequence());

$processroute->setstation($nextstage);
$processroute->setprocess($intlotdata2->processcat);

$processroute->getStationDetails();

$logsdata = IntLotLogs::GetDetails($_GET['intlotno'],$nextstage);
$intlogsdata = json_encode($logsdata[0]);
$intlogsdata2 = json_decode($intlogsdata);

$stationdetails = new Station;
$intlotlogs = new IntLotLogs;
$ilot = new IntLotno;
$stationdetails->StationDetails($nextstage);

if(@$_SESSION['idno'])
{
   
    if($intlotdata2->status == 'ON PROCESS')
    {
        

        
        $ilot->setintlotno($intlotno);
        $ilot->setcustcode($intlotdata2->custcode);
        
        $ilot->setlastupdatedby($_SESSION['idno']);
        
        if($btnStat == 'hold')
        {
            if($intlotdata2->processcat == 'BACKGRIND')
            {
                $intlotlogs->DoneInspect('HOLD',intval($intlotdata2->currqty),$intlotdata2->custcode,$intlotno,$nextstage,$remarks,$_SESSION['idno']);
            }
            else
            {
                $intlotlogs->DoneInspect('HOLD',intval($intlotdata2->currqty) - intval($total),$intlotdata2->custcode,$intlotno,$nextstage,$remarks,$_SESSION['idno']);
            }
            
            $ilot->setstation($intlotdata2->station);
            $ilot->setstatus('HOLD');
        }
        else
        {
            if($intlotdata2->processcat == 'BACKGRIND')
            {
                $intlotlogs->DoneInspect($status,intval($intlotdata2->currqty),$intlotdata2->custcode,$intlotno,$nextstage,$remarks,$_SESSION['idno']);
                if($processroute->getforbackgrind() == 1)
                {
                    $ilot->updateBRM($intlotno,$intlotdata2->custcode,$brm);
                }
                $ilot->setstatus('DONE');
                
            }
            else
            {
                $intlotlogs->DoneInspect($status,intval($intlotdata2->currqty) - intval($total),$intlotdata2->custcode,$intlotno,$nextstage,$remarks,$_SESSION['idno']);
                
                if((intval($intlotdata2->currqty) - intval($total)) == 0)
                {
                    $ilot->setstatus('EMPTY');
                }
                else
                {
                    $ilot->setstatus('DONE');
                }
            }
            $ilot->setstation($nextstage);
            
            
        }
        $ilot->DoneInspect();
        

        echo 'success_Inspection of Internal Lot number: <b>'.$intlotno.'</b> is completed in <b>'.date('F j, Y, g:i a');
    }
    else if($intlotdata2->status == 'HOLD')
    {
        echo 'error_<b>Error! '.$intlotno.' is at HOLD status </b>';
    }
    else if($intlotdata2->status == 'DONE')
    {
        echo 'error_<b>Error! '.$intlotno.' is not yet ON PROCESS at '.$nextstage.':'.$stationdetails->getdescription().' station';
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
    echo 'session_Session login expired!';
}


?>