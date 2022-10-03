<?php
include_once("../classes/efai020.php");
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
$qcexist = passcode::checkExist($data->qcemp,'qc');

if($exist == 'false')
{
    echo 'error_Error! '.$intlotno.' not exist on our Database!';
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

$qcidno = strtoupper($data->qcemp) === 'N/A' ? "N/A" : passcode::getPasscodeIdno($data->qcemp,'qc');

//echo $intlotdata2->custcode;
$efai020 = new efai020();

$efai020->setcustcode($intlotdata2->custcode);
$efai020->setintlot($intlotno);
$efai020->setwswr($data->wswr);
$efai020->setswrno($data->swrno);
$efai020->setpackagetype($data->packagetype);
$efai020->setstripno($data->stripno);
$efai020->setpackagethickness($data->packagethickness);
$efai020->setpackagesize($data->packagesize);
$efai020->setarraysize($data->arraysize);
$efai020->setlotrequiringmanualdepanelling($data->lotrequiringmanualdepanelling);
$efai020->setremnantsrejectunitsbeenremoved($data->remnantsrejectunitsbeenremoved);
$efai020->setgoodunitsbeenscrapedfromdicingtape($data->goodunitsbeenscrapedfromdicingtape);
$efai020->setcanisterfilledwithfoam($data->canisterfilledwithfoam);
$efai020->setcanisterproperlyenclosedwithlid($data->canisterproperlyenclosedwithlid);
$efai020->setpackinglotdetailsattached($data->packinglotdetailsattached);
$efai020->setlotproperlyvacuumsealed($data->lotproperlyvacuumsealed);
$efai020->setvacuumsealerpressure($data->vacuumsealerpressure);
$efai020->setqcremnantsrejectunitsbeenremoved($data->qcremnantsrejectunitsbeenremoved);
$efai020->setqcemp($qcidno);
$efai020->setremarks($data->remarks);
$efai020->setlastupdate(date("Y-m-d H:i:s"));
$efai020->setlastupdatedby($_SESSION['idno']);
$efai020->setactive(1);


$success = $efai020->Addefai020();

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
            $reject->setstation('020');
            $reject->setmachine('');
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