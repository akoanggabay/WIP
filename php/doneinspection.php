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
$twaferno = $_GET['twaferno'];
$tpoint1 = $_GET['tpoint1'];
$tpoint5 = $_GET['tpoint5'];
$tpoint2 = $_GET['tpoint2'];
$tpoint3 = $_GET['tpoint3'];
$tpoint4 = $_GET['tpoint4'];
$ttv = $_GET['ttv'];
$pave = $_GET['pave'];
$rpoint1 = $_GET['rpoint1'];
$rpoint2 = $_GET['rpoint2'];
$rpoint3 = $_GET['rpoint3'];
$rpoint4 = $_GET['rpoint4'];
$rpoint5 = $_GET['rpoint5'];
$rave = $_GET['rave'];
$btnStat = $_GET['btnStat'];
$status = '';
$total = 0;

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
        if(count($sdqty) > 0)
        {
            $reject = new Reject;
            for($x=0;$x<count($sdqty);$x++){

                $total += (int) $sdqty[$x];
                //echo $sdwaferno[$x];
                $reject->setintlotno($intlotno);
                $reject->setcustcode($intlotdata2->custcode);
                $reject->setstation($nextstage);
                $reject->setmachine($intlogsdata2->machine);
                $reject->setwaferno($sdwaferno[$x]);
                $reject->setddetails($sddetails[$x]);
                $reject->setdqty($sdqty[$x]);
                $reject->setremarks($sdremarks[$x]);
                $reject->setlastupdate(date("Y-m-d h:i:sa"));
                $reject->setlastupdatedby($_SESSION['idno']);

                $reject->AddReject();

            }
            //echo $total;
            if((intval($intlotdata2->currqty) - intval($total)) == 0)
            {
                $status = 'EMPTY';
                $ilot->setstatus('EMPTY');
            }
            else
            {
                $status = 'REJECT';
                $ilot->setstatus('PROCESSED');
            }
            $ilot->setintlotno($intlotno);
            $ilot->setcustcode($intlotdata2->custcode);
            $ilot->updateCurrqty(intval($intlotdata2->currqty) - intval($total));
        }
        else
        {
            $status = 'PROCESSED';
        }
        if($rave)
        {
            $roughness = new Roughness;

            $roughness->setintlotno($intlotno);
            $roughness->setcustcode($intlotdata2->custcode);
            $roughness->setstation($nextstage);
            $roughness->setr1($rpoint1);
            $roughness->setr2($rpoint2);
            $roughness->setr3($rpoint3);
            $roughness->setr4($rpoint4);
            $roughness->setr5($rpoint5);
            $roughness->setrave($rave);
            $roughness->setlastupdate(date("Y-m-d h:i:sa"));
            $roughness->setlastupdatedby($_SESSION['idno']);
            $roughness->AddRoughness();
        }

        if($pave)
        {
            $thickness = new Thickness;

            $thickness->setintlotno($intlotno);
            $thickness->setcustcode($intlotdata2->custcode);
            $thickness->setwaferno($twaferno);
            $thickness->setstation($nextstage);
            $thickness->setp1($tpoint1);
            $thickness->setp2($tpoint2);
            $thickness->setp3($tpoint3);
            $thickness->setp4($tpoint4);
            $thickness->setp5($tpoint5);
            $thickness->setpave($pave);
            $thickness->setttv($ttv);
            $thickness->setlastupdate(date("Y-m-d h:i:sa"));
            $thickness->setlastupdatedby($_SESSION['idno']);
            $thickness->AddThickness();


        }

        
        $ilot->setintlotno($intlotno);
        $ilot->setcustcode($intlotdata2->custcode);
        
        $ilot->setlastupdatedby($_SESSION['idno']);
        
        if($btnStat == 'hold')
        {
            $intlotlogs->DoneInspect('HOLD',intval($intlotdata2->currqty) - intval($total),$intlotdata2->custcode,$intlotno,$nextstage);
            $ilot->setstation($intlotdata2->station);
            $ilot->setstatus('HOLD');
        }
        else
        {
            $intlotlogs->DoneInspect($status,intval($intlotdata2->currqty) - intval($total),$intlotdata2->custcode,$intlotno,$nextstage);
            $ilot->setstation($nextstage);
            if((intval($intlotdata2->currqty) - intval($total)) == 0)
            {
                $ilot->setstatus('EMPTY');
            }
            else
            {
                $ilot->setstatus('PROCESSED');
            }
            
        }
        $ilot->DoneInspect();
        

        echo 'success_Inspection of Internal Lot number: <b>'.$intlotno.'</b> is completed in <b>'.date('F j, Y, g:i a');
    }
    else if($intlotdata2->status == 'HOLD')
    {
        echo 'error_<b>Error! '.$intlotno.' is at HOLD status </b>';
    }
    else if($intlotdata2->status == 'PROCESSED')
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