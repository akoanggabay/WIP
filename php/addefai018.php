<?php
include_once("../classes/efai018.php");
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

$qcidno = strtoupper($data->mpqcemp) === 'N/A' ? "N/A" : passcode::getPasscodeIdno($data->qcemp,'qc');

//echo $intlotdata2->custcode;
$efai018 = new efai018();

$efai018->setcustcode($intlotdata2->custcode);
$efai018->setintlot($intlotno);
$efai018->setwswr($data->wswr);
$efai018->setswrno($data->swrno);
$efai018->setpackagetype($data->packagetype);
$efai018->setstripno($data->stripno);
$efai018->setpackagethickness($data->packagethickness);
$efai018->setpackagesize($data->packagesize);
$efai018->setarraysize($data->arraysize);
$efai018->setlotrequiringmanualdepanelling($data->lotrequiringmanualdepanelling);
$efai018->setpanelundergo100inspection($data->panelundergo100inspection);
$efai018->setremnantsrejectunitsbeenremoved($data->remnantsrejectunitsbeenremoved);
$efai018->setcanisterplacedunderdepanellingguide($data->canisterplacedunderdepanellingguide);
$efai018->setfoamcushiondiskplacedinside($data->foamcushiondiskplacedinside);
$efai018->setgoodunitsbeenscrapedfromdicingtape($data->goodunitsbeenscrapedfromdicingtape);
$efai018->setqcremnantsrejectunitsbeenremoved($data->qcremnantsrejectunitsbeenremoved);
$efai018->setqcemp($qcidno);
$efai018->setremarks($data->remarks);
$efai018->setlastupdate(date("Y-m-d H:i:s"));
$efai018->setlastupdatedby($_SESSION['idno']);
$efai018->setactive(1);


$success = $efai018->Addefai018();

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
            $reject->setstation('018');
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