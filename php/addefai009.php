<?php
include_once("../classes/efai009.php");
include_once("../classes/intlotno.php");
include_once("../classes/reject.php");
include_once("../classes/passcode.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

//json defect
$sdwaferno = json_decode($_GET['sdwaferno']);
$sddetails = json_decode($_GET['sddetails']);
$sdqty = json_decode($_GET['sdqty']);
$sdremarks = json_decode($_GET['sdremarks']);
$total = 0;

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

//echo $intlotdata2->custcode;
$efai009 = new efai009();

$efai009->setcustcode($intlotdata2->custcode);
$efai009->setintlot($intlotno);
$efai009->setwswr($data->wswr);
$efai009->setswrno($data->swrno);
$efai009->setwafersaw($data->wsaw);
$efai009->setloaderplateclean($data->loaderplateclean);
$efai009->setuvirradtime($data->uvirradtime);
$efai009->setbustedlamp($data->bustedlamp);
$efai009->setlamphourusage($data->lamphourusage);
$efai009->setrequireduvdosage($data->requireduvdosage);
$efai009->setactualuvdosage($data->actualuvdosage);
$efai009->setwafernouvcuring($data->wafernouvcuring);
$efai009->setreasonuvcuring($data->reasonuvcuring);
$efai009->settechemp($data->techemp);
$efai009->setqcemp($data->qcemp);
$efai009->setremarks($data->remarks);
$efai009->setmachine($data->machine);
$efai009->setfaicat($data->faicat);
$efai009->setlastupdatedby($_SESSION['idno']);
$success = $efai009->Addefai009();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $total += (int) $sdqty[$x];
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('009');
            $reject->setmachine($data->machine);
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d H:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }
        /* $ilot = new IntLotno;
        $ilot->updateCurrqty2($intlotno,$intlotdata2->custcode,intval($intlotdata2->currqty) - intval($total)); */
    }
}
else
{
    echo "error_Can't Connect to Database!";
}


?>