<?php
include_once("../classes/efai007.php");
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
$efai007 = new efai007();

$efai007->setcustcode($intlotdata2->custcode);
$efai007->setintlot($intlotno);
$efai007->setmounttype($data->mounttype);
$efai007->setmachine($data->machine);
$efai007->setfaicat($data->faicat);
$efai007->setwswr($data->wswr);
$efai007->setswrno($data->swrno);
$efai007->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai007->setrequiredwaferthickness($data->requiredwaferthickness);
$efai007->setactualwaferthickness($data->actualwaferthickness);
$efai007->setrequiredwaferorientation($data->requiredwaferorientation);
$efai007->setactualwaferorientation($data->actualwaferorientation);
$efai007->setprocessmode($data->processmode);

$efai007->setchucktablechange($data->chucktablechange);
$efai007->setchuckplateclean($data->chuckplateclean);
$efai007->setchucktabletype($data->chucktabletype);
$efai007->setchucktabletemp($data->chucktabletemp);
$efai007->setchucktablesize($data->chucktablesize);

$efai007->setdicingtapechange($data->dicingtapechange);
$efai007->setdicingtapetype($data->dicingtapetype);
$efai007->setdicingtapesize($data->dicingtapesize);
$efai007->setdicingtapeinstallation($data->dicingtapeinstallation);
$efai007->setdicingtapeused($data->dicingtapeused);
$efai007->setdicingtapelotno($data->dicingtapelotno);
$efai007->setdicingtapeexp($data->dicingtapeexp);

$efai007->setbladechange($data->bladechange);
$efai007->setbladecount($data->bladecount);
$efai007->setbladeposition($data->bladeposition);

$efai007->setringframeclean($data->ringframeclean);
$efai007->setlotpreheatprocess($data->lotpreheatprocess);
$efai007->settabletemprequired($data->tabletemprequired);
$efai007->settabletempactual($data->tabletempactual);

$efai007->setpreheatingtime($_GET['preheatingtime']);

$efai007->setmainairpressure($data->mainairpressure);
$efai007->setsetupwafer($data->setupwafer);
$efai007->setrollerpressure($data->rollerpressure);
$efai007->settechemp($data->techemp);
$efai007->setqcemp($data->qcemp);
$efai007->setremarks($data->remarks);
$efai007->setlastupdatedby($_SESSION['idno']);
$success = $efai007->AddeFAI007();

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
            $reject->setstation('007');
            $reject->setmachine($data->machine);
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d h:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }

        $ilot = new IntLotno;
        $ilot->updateCurrqty2($intlotno,$intlotdata2->custcode,intval($intlotdata2->currqty) - intval($total));
    }
}
else
{
    echo "error_Can't Connect to Database!";
}


?>