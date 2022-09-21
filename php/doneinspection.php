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



$btnStat = $_GET['btnStat'];
$status = '';
$total = 0;



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

$efai = substr($nextstage,0,3) === 'IQC' ? '013' : substr($nextstage,0,3);

$efaiExist = IntLotno::checkExisteFAI($efai,$intlotno);

if(!@$_SESSION['idno'])
{
    echo 'session_Session login expired!';
    return false;
}

   
if($intlotdata2->status == 'ON PROCESS')
{
    
    if($efaiExist == 'false')
    {
        echo "error_$intlotno is still on eFAI process.";
        return false;
    }
    $ilot->setintlotno($intlotno);
    $ilot->setcustcode($intlotdata2->custcode);
    
    $ilot->setlastupdatedby($_SESSION['idno']);
    
    if($btnStat == 'hold')
    {
        if($intlotdata2->processcat == 'BACKGRIND')
        {
            $intlotlogs->DoneInspect('HOLD',intval($intlotdata2->currqty),$intlotdata2->custcode,$intlotno,$nextstage,'',$_SESSION['idno']);
        }
        else
        {
            $intlotlogs->DoneInspect('HOLD',intval($intlotdata2->currqty) - intval($total),$intlotdata2->custcode,$intlotno,$nextstage,'',$_SESSION['idno']);
        }
        
        $ilot->setstation($intlotdata2->station);
        $ilot->setstatus('HOLD');
    }
    else
    {
        if($intlotdata2->processcat == 'BACKGRIND')
        {
            $intlotlogs->DoneInspect('DONE',intval($intlotdata2->currqty),$intlotdata2->custcode,$intlotno,$nextstage,'',$_SESSION['idno']);
            $ilot->setstatus('DONE');
            
        }
        else
        {
            $intlotlogs->DoneInspect('DONE',intval($intlotdata2->currqty) - intval($total),$intlotdata2->custcode,$intlotno,$nextstage,'',$_SESSION['idno']);
            
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
    

    echo 'success_Inspection of Internal Lot number: '.$intlotno.' is completed in '.date('F j, Y, g:i a');
}
else if($intlotdata2->status == 'HOLD')
{
    echo 'error_Error! '.$intlotno.' is at HOLD status';
}
else if($intlotdata2->status == 'DONE')
{
    echo 'error_Error! '.$intlotno.' is not yet ON PROCESS at '.$nextstage.':'.$stationdetails->getdescription().' station';
}
else if($intlotdata2->status == 'EMPTY')
{
    echo 'error_Error! '.$intlotno.' is already empty!';
}
else
{
    echo 'error_Error! Cannot process Internal Lot number: '.$intlotno.'';
}
    


?>