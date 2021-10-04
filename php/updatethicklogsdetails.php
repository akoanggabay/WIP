<?php 
include_once("../classes/thickness.php");
include_once("../classes/thicknesslogs.php");
session_start();

$thick = new Thickness;
$thicklogs = new ThicknessLogs;

$trackingno = $_GET['trackingno'];
$waferno = $_GET['waferno'];
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$p4 = $_GET['p4'];
$p5 = $_GET['p5'];
$pave = $_GET['pave'];
$ttv = $_GET['ttv'];


$data = Thickness::TrackGetDetails($trackingno);
$thicklogsdata = json_encode($data[0]);
$thicklogsdata2 = json_decode($thicklogsdata);

$thicklogs->settrackingno($trackingno);
$thicklogs->setwaferno($thicklogsdata2->waferno);
$thicklogs->setp1($thicklogsdata2->p1);
$thicklogs->setp2($thicklogsdata2->p2);
$thicklogs->setp3($thicklogsdata2->p3);
$thicklogs->setp4($thicklogsdata2->p4);
$thicklogs->setp5($thicklogsdata2->p5);
$thicklogs->setpave($thicklogsdata2->pave);
$thicklogs->setttv($thicklogsdata2->ttv);
$thicklogs->setlastupdatedby($_SESSION['idno']);
$thicklogs->setlastupdate(date("Y-m-d h:i:sa"));

$thick->setwaferno($waferno);
$thick->setp1($p1);
$thick->setp2($p2);
$thick->setp3($p3);
$thick->setp4($p4);
$thick->setp5($p5);
$thick->setpave($pave);
$thick->setttv($ttv);




if($_SESSION['idno'])
{
    $success = $thick->UpdateThick($trackingno);
    if($success == true)
    {
        $thicklogs->AddThicknessLogs();
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update Thickness logs!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>