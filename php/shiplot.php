<?php
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/station.php");
include_once("../classes/processroute.php");
session_start();


$intlotno = $_GET['intlotno'];



$exist = IntLotno::checkExist($intlotno);
if($_SESSION['idno'])
{
    if($exist == 'true')
    {
        $data = IntLotno::GetDetails($intlotno);
        $intlotdata = json_encode($data[0]);
        $intlotdata2 = json_decode($intlotdata);

        $processroute = new ProcessRoute;

        $station = ProcessRoute::getpackingprocess($intlotdata2->processcat);
        $processroute->setstation($intlotdata2->station);
        $processroute->setprocess($intlotdata2->processcat);

        $processroute->getStationDetails();

        $nextstage = ProcessRoute::getnextstage($intlotdata2->processcat,$processroute->getflowsequence());
        $stationdetails = new Station;

        $stationdetails->StationDetails($nextstage);
        if($nextstage == $station || $intlotdata2->station == $station)
        {
            if($intlotdata2->status == 'DONE')
            {
                $intlotlogs = new IntLotLogs;
                
                $intlotlogs->setcustcode($intlotdata2->custcode);
                $intlotlogs->setintlot($intlotno);
                $intlotlogs->setstation($nextstage);
                $intlotlogs->setmachine('');
                $intlotlogs->setqtyin($intlotdata2->currqty);
                $intlotlogs->setdatein(date("Y-m-d h:i:sa"));
                $intlotlogs->setlastupdatedby($_SESSION['idno']);
                $intlotlogs->setstatus('SHIPPED');
                $intlotlogs->setwaferno('');
                $intlotlogs->setwaferrun('');

                $success = $intlotlogs->AddIntLotLogs();

                $ilot = new IntLotno;

                $ilot->setstatus('SHIPPED');
                $ilot->setstation($nextstage);
                $ilot->setcustcode($intlotdata2->custcode);
                $ilot->setlastupdatedby($_SESSION['idno']);
                $ilot->setintlotno($intlotno);

                $ilot->DoneInspect();

                echo 'success_Internal Lot number: <b>'.$intlotno.'</b> has been SHIPPED in <b>'.date('F j, Y, g:i a').'_'.json_encode($data[0]);
            }
            else if($intlotdata2->status == 'SHIPPED')
            {
                echo 'shipped_Internal Lot number: <b>'.$intlotno.'</b> already at SHIPPED status. Re-print function enabled!<b>'.'_'.json_encode($data[0]);
            }
            else if($intlotdata2->status == 'HOLD')
            {
                echo 'error_<b>Error! '.$intlotno.' is at HOLD status </b>';
            }
            else if($intlotdata2->status == 'ON PROCESS')
            {
                echo 'error_<b>Error! '.$intlotno.' is still ON PROCESS at '.$nextstage.':'.$stationdetails->getdescription().' station'.'_'.json_encode($data[0]);
            }
            else if($intlotdata2->status == 'EMPTY')
            {
                echo 'error_<b>Error! '.$intlotno.' is already empty! </b>'.'_'.json_encode($data[0]);
            }
            else
            {
                echo 'error_<b>Error! Cannot process Internal Lot number: '.$intlotno.'</b>'.'_'.json_encode($data[0]);
            }
        }
        else
        {
            echo 'error_<b>Error! Off route! '.$intlotno.'</b> is for <b>'.$nextstage.':'.$stationdetails->getdescription().'_'.json_encode($data[0]);
        }
    }
    else
    {
        echo 'notexist_<b>Error!</b> Internal Lot number: <b>'.$intlotno.'</b> does not exist on our database!';
    }
}
else
{
    echo 'session_Session login expired!';
}


?>