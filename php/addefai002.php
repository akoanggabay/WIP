<?php
include_once("../classes/efai002.php");
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


$exist = IntLotno::checkExist($intlotno);
$techexist = passcode::checkExist($data->mptechemp,'tech');
$qcexist = passcode::checkExist($data->mpqcemp,'qc');

if($exist == 'false')
{
    echo 'error_Error! '.$intlotno.' not exist on our Database!';
    return false;
}

if($techexist == 'false' && strtoupper($data->mptechemp) != 'N/A')
{
    echo 'error_Error! Technician Employee passcode does not exist!';
    return false;
}

if($qcexist == 'false' && strtoupper($data->mpqcemp) != 'N/A')
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
$efai002 = new efai002();

$efai002->setcustcode($intlotdata2->custcode);
$efai002->setintlot($intlotno);
$efai002->setmachine($data->machine);
$efai002->setfaicat($data->faicat);
$efai002->setwswr($data->wswr);
$efai002->setswrno($data->swrno);
$efai002->setwafercondition($data->wcondition);
$efai002->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai002->setwaferboatslotting($data->waferboatslotting);
$efai002->setchucktabletype($data->chucktabletype);
$efai002->setchucktablecleaning($data->chucktablecleaning);
$efai002->setprocessmode($data->processmode);
$efai002->setchangetape($data->changetape);
$efai002->setbgtapetype($data->bgtapetype);
$efai002->setbgtapeused($data->bgtapeused);
$efai002->setbgtapelotno($data->bgtapelotno);
$efai002->setbgtapeexpdate($data->bgtapeexpdate);
$efai002->setnotchtype($data->notchtype);
$efai002->setchangeblade($data->changeblade);
$efai002->setbladetemp($data->bladetemp);
$efai002->setbladecount($data->bladecount);
$efai002->setsetupwafer($data->setupwafer);
$efai002->setfirstwaferinspection($data->firstwaferinspection);
$efai002->setfirstwaferno($data->firstwaferno);
$efai002->setchucktablecleaning($data->chucktablecleaning);
$efai002->setmpbgtapeinstallation($data->mpbgtapeinstallation);
$efai002->setmpbgtaperollercleaning($data->mpbgtaperollercleaning);
$efai002->setmpbladeposition($data->mpbladeposition);
$efai002->setmplamphourusage($data->mplamphourusage);
$efai002->setmptechemp($data->mptechemp);
$efai002->setmpqcemp($data->mpqcemp);
$efai002->setremarks($data->remarks);
$efai002->setlastupdatedby($_SESSION['idno']);

$success = $efai002->AddeFAI002();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('002');
            $reject->setmachine($data->machine);
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d h:i:s"));
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