<?php
include_once("../classes/efai016.php");
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

if(!$_SESSION['idno'])
{
    echo 'error_Login session timeout!';
    return false;
}
$lotdata = IntLotno::GetDetails($intlotno);
$intlotdata = json_encode($lotdata[0]);
$intlotdata2 = json_decode($intlotdata);

//echo $intlotdata2->custcode;
$efai016 = new efai016();

$efai016->setcustcode($intlotdata2->custcode);
$efai016->setintlot($intlotno);
$efai016->setmachine($data->machine);
$efai016->setwswr($data->wswr);
$efai016->setswrno($data->swrno);
$efai016->setfaicat($data->faicat);
$efai016->setpackagetype($data->packagetype);
$efai016->setstripno($data->stripno);
$efai016->setpackagethickness($data->packagethickness);
$efai016->setpackagesize($data->packagesize);
$efai016->setarraysize($data->arraysize);
$efai016->setreasonuvcuring($data->reasonuvcuring);
$efai016->setloadingtrayclean($data->loadingtrayclean);
$efai016->setuvlampsfunctional($data->uvlampsfunctional);
$efai016->setuvtapedescription($data->uvtapedescription);
$efai016->setuvirradtime($data->uvirradtime);
$efai016->setringnoundergoneuvcuring($data->ringnoundergoneuvcuring);
$efai016->setmarkingperformedwithuvcuring($data->markingperformedwithuvcuring);
$efai016->settechemp($data->techemp);
$efai016->setremarks($data->remarks);
$efai016->setlastupdatedby($_SESSION['idno']);



$success = $efai016->Addefai016();

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
            $reject->setstation('016');
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