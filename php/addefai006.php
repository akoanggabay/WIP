<?php
include_once("../classes/efai006.php");
include_once("../classes/intlotno.php");
include_once("../classes/reject.php");
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

if($exist == 'false')
{
    echo 'error_Error! '.$intlotno.' not exist on our Database!';
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
$efai006 = new efai006();

$efai006->setcustcode($intlotdata2->custcode);
$efai006->setintlot($intlotno);
$efai006->setwswr($data->wswr);
$efai006->setswrno($data->swrno);
$efai006->setwafersaw($data->wsaw);
$efai006->setwafercondition($data->wcondition);
$efai006->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai006->settapetype($data->tapetype);
$efai006->settapeused($data->tapeused);
$efai006->settapethickness($data->tapethickness);
$efai006->setrequiredwaferthickness($data->requiredwaferthickness);
$efai006->setactualwaferthickness($data->actualwaferthickness);
$efai006->setrequiredwaferorientation($data->requiredwaferorientation);
$efai006->setactualwaferorientation($data->actualwaferorientation);
$efai006->sethighmaginspectionrequired($data->highmaginspectionrequired);
$efai006->setremarks($data->remarks);
$efai006->setlastupdatedby($_SESSION['idno']);
$success = $efai006->Addefai006();

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
            $reject->setstation('006');
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