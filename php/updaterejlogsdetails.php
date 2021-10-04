<?php 
include_once("../classes/reject.php");
include_once("../classes/rejectlogs.php");
session_start();

$reject = new Reject;
$rejectlogs = new RejectLogs;

$trackingno = $_GET['trackingno'];
$waferno = $_GET['waferno'];
$ddetails = $_GET['ddetails'];
$dqty = $_GET['dqty'];
$remarks = $_GET['remarks'];


$data = Reject::TrackGetDetails($trackingno);
$rejlogsdata = json_encode($data[0]);
$rejlogsdata2 = json_decode($rejlogsdata);

$rejectlogs->settrackingno($trackingno);
$rejectlogs->setwaferno($rejlogsdata2->waferno);
$rejectlogs->setddetails($rejlogsdata2->ddetails);
$rejectlogs->setdqty($rejlogsdata2->dqty);
$rejectlogs->setremarks($rejlogsdata2->remarks);
$rejectlogs->setlastupdatedby($_SESSION['idno']);
$rejectlogs->setlastupdate(date("Y-m-d h:i:sa"));

$reject->setwaferno($waferno);
$reject->setddetails($ddetails);
$reject->setdqty($dqty);
$reject->setremarks($remarks);



if($_SESSION['idno'])
{
    $success = $reject->UpdateReject($trackingno);
    if($success == true)
    {
        $rejectlogs->AddRejectLogs();
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Reject logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>