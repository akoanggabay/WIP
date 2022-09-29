<?php 
include_once("../classes/roughness.php");
session_start();

$rough = new Roughness;


$trackingno = $_GET['trackingno'];


$data = Roughness::TrackGetDetails($trackingno);
$roughlogsdata = json_encode($data[0]);
$roughlogsdata2 = json_decode($roughlogsdata);

$roughlogs->settrackingno($trackingno);
$roughlogs->setr1($roughlogsdata2->r1);
$roughlogs->setr2($roughlogsdata2->r2);
$roughlogs->setr3($roughlogsdata2->r3);
$roughlogs->setr4($roughlogsdata2->r4);
$roughlogs->setr5($roughlogsdata2->r5);
$roughlogs->setrave($roughlogsdata2->rave);
$roughlogs->setlastupdatedby($_SESSION['idno']);
$roughlogs->setlastupdate(date("Y-m-d h:i:sa"));

$rough->setr1($r1);
$rough->setr2($r2);
$rough->setr3($r3);
$rough->setr4($r4);
$rough->setr5($r5);
$rough->setrave($rave);




if($_SESSION['idno'])
{
    $success = $rough->UpdateRough($trackingno);
    if($success == true)
    {
        $roughlogs->AddRoughnessLogs();
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Roughness logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>