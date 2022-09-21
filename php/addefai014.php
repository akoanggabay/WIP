<?php
include_once("../classes/efai014.php");
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

if($techexist == 'false')
{
    echo 'error_Error! Technician Employee passcode does not exist!';
    return false;
}

if($qcexist == 'false')
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
$efai014 = new efai014();

$efai014->setcustcode($intlotdata2->custcode);
$efai014->setintlot($intlotno);
$efai014->setmachine($data->machine);
$efai014->setwswr($data->wswr);
$efai014->setswrno($data->swrno);
$efai014->setfaicat($data->faicat);
$efai014->setpackagetype($data->packagetype);
$efai014->setstripno($data->stripno);
$efai014->setpackagethickness($data->packagethickness);
$efai014->setpackagesize($data->packagesize);
$efai014->setarraysize($data->arraysize);
$efai014->setrequiredpackagethickness($data->requiredpackagethickness);
$efai014->setactualpackagethickness($data->actualpackagethickness);
$efai014->setrequiredmountingorientation($data->requiredmountingorientation);
$efai014->setactualmountingorientation($data->actualmountingorientation);
$efai014->setprocessmode($data->processmode);
$efai014->settablevacuumpressure($data->tablevacuumpressure);
$efai014->setringframesizesetup($data->ringframesizesetup);
$efai014->settablesizesetup($data->tablesizesetup);
$efai014->setcutterbladepositionsetup($data->cutterbladepositionsetup);
$efai014->setchangeincutterblade($data->changeincutterblade);
$efai014->setbladecount($data->bladecount);
$efai014->setchuckplateclean($data->chuckplateclean);
$efai014->setdicingtapechange($data->dicingtapechange);
$efai014->setdicingtapetype($data->dicingtapetype);
$efai014->setdicingtapeused($data->dicingtapeused);
$efai014->setdicingtapelotno($data->dicingtapelotno);
$efai014->setdicingtapeexp($data->dicingtapeexp);
$efai014->settechemp($data->techemp);
$efai014->setqcemp($data->qcemp);
$efai014->setremarks($data->remarks);
$efai014->setlastupdate(date("Y-m-d H:i:s"));
$efai014->setlastupdatedby($_SESSION['idno']);
$efai014->setactive(1);




$success = $efai014->Addefai014();

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
            $reject->setstation('014');
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