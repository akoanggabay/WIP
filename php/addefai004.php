<?php
include_once("../classes/efai004.php");
include_once("../classes/intlotno.php");
include_once("../classes/reject.php");
include_once("../classes/passcode.php");
include_once("../classes/intlotlogs.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

//json defect
$sdwaferno = json_decode($_GET['sdwaferno']);
$sddetails = json_decode($_GET['sddetails']);
$sdqty = json_decode($_GET['sdqty']);
$sdremarks = json_decode($_GET['sdremarks']);


$exist = IntLotno::checkExist($intlotno);
$techexist = passcode::checkExist($data->techemp,'tech');
$qcexist = passcode::checkExist($data->qcemp,'qc');

if($exist == 'false')
{
    echo 'error_Error! '.$intlotno.' not exist on our Database!';
    return false;
}

if($techexist == 'false' && strtoupper($data->techemp) != 'N/A')
{
    echo 'error_Error! Technician Employee passcode does not exist!';
    return false;
}

if($qcexist == 'false' && strtoupper($data->qcemp) != 'N/A')
{
    echo 'error_Error! QC Employee passcode does not exist!';
    return false;
}

if(!$_SESSION['idno'])
{
    echo 'error_Login session timeout!';
    return false;
}
$lotdata = IntLotno::GetDetails($intlotno);
$intlotdata = json_encode($lotdata[0]);
$intlotdata2 = json_decode($intlotdata);

$bgtapetime = IntLotLogs::ILNLogsTapingtoBG($intlotno);

//echo $intlotdata2->custcode;
$efai004 = new efai004();

$efai004->setcustcode($intlotdata2->custcode);
$efai004->setintlot($intlotno);
$efai004->setmachine($data->machine);
$efai004->setfaicat($data->faicat);
$efai004->setwswr($data->wswr);
$efai004->setswrno($data->swrno);
$efai004->setwafersize($data->wsize);
$efai004->setslotting($data->slotting);
$efai004->setchucktablecleaning($data->chucktablecleaning);
$efai004->setprocessmode($data->processmode);
$efai004->setbgtapetype($data->bgtapetype);
$efai004->setbgtapeused($data->bgtapeused);
$efai004->setbgtapestaging($data->bgtapestaging);
$efai004->settabletemp($data->tabletemp);
$efai004->setchucktablevacuumpressure($data->chucktablevacuumpressure);
$efai004->setuvlight($data->uvlight);
$efai004->setchangedetapetape($data->changedetapetape);
$efai004->setdetapingtapeused($data->detapingtapeused);
$efai004->setdetapingtapeexpdate($data->detapingtapeexpdate);
$efai004->setdetapingtapelotno($data->detapingtapelotno);
$efai004->setnotchtype($data->notchtype);
$efai004->setsetupwafer($data->setupwafer);
$efai004->setfirstwaferinspection($data->firstwaferinspection);
$efai004->setfirstwaferno($data->firstwaferno);
$efai004->setnoofwafersinspected($data->noofwafersinspected);
$efai004->setdetapingtaperoller($data->detapingtaperoller);
$efai004->setdetapingtapeinstallation($data->detapingtapeinstallation);
$efai004->settapewindingpressure($data->tapewindingpressure);
$efai004->settapedeliverypressure($data->tapedeliverypressure);
$efai004->setlamphourusage($data->lamphourusage);
$efai004->setchuckplatebaseheight($data->chuckplatebaseheight);
$efai004->settechemp($data->techemp);
$efai004->setqcemp($data->qcemp);
$efai004->setremarks($data->remarks);
$efai004->setuvirrad($data->uvirrad);
$efai004->setlastupdatedby($_SESSION['idno']);

$success = $efai004->Addefai004();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('004');
            $reject->setmachine($data->machine);
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d H:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }
    }
}
else
{
    echo "error_Can't Connect to Database!";
}


?>