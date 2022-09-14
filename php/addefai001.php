<?php
include_once("../classes/efai001.php");
include_once("../classes/intlotno.php");
include_once("../classes/reject.php");
include_once("../classes/bumpheight.php");
include_once("../classes/initialthickness.php");
include_once("../classes/inkdotheight.php");
include_once("../classes/warpage.php");
session_start();

$intlotno = $_GET['intlotno'];
$data = json_decode($_GET['data']);

//json defect
$sdwaferno = json_decode($_GET['sdwaferno']);
$sddetails = json_decode($_GET['sddetails']);
$sdqty = json_decode($_GET['sdqty']);
$sdremarks = json_decode($_GET['sdremarks']);

//json initial thickness

$sinitialthicknesswaferno = json_decode($_GET['sinitialthicknesswaferno']);
$sinitialthicknessp1 = json_decode($_GET['sinitialthicknessp1']);
$sinitialthicknessp2 = json_decode($_GET['sinitialthicknessp2']);
$sinitialthicknessp3 = json_decode($_GET['sinitialthicknessp3']);
$sinitialthicknessp4 = json_decode($_GET['sinitialthicknessp4']);
$sinitialthicknessp5 = json_decode($_GET['sinitialthicknessp5']);

//json ink dot height

$sinkdotheightwaferno = json_decode($_GET['sinkdotheightwaferno']);
$sinkdotheightp1 = json_decode($_GET['sinkdotheightp1']);
$sinkdotheightp2 = json_decode($_GET['sinkdotheightp2']);
$sinkdotheightp3 = json_decode($_GET['sinkdotheightp3']);
$sinkdotheightp4 = json_decode($_GET['sinkdotheightp4']);
$sinkdotheightp5 = json_decode($_GET['sinkdotheightp5']);

//json bump height

$sbumpheightwaferno = json_decode($_GET['sbumpheightwaferno']);
$sbumpheightp1 = json_decode($_GET['sbumpheightp1']);
$sbumpheightp2 = json_decode($_GET['sbumpheightp2']);
$sbumpheightp3 = json_decode($_GET['sbumpheightp3']);
$sbumpheightp4 = json_decode($_GET['sbumpheightp4']);
$sbumpheightp5 = json_decode($_GET['sbumpheightp5']);

//json war page

$swarpagewaferno = json_decode($_GET['swarpagewaferno']);
$swarpagep1 = json_decode($_GET['swarpagep1']);
$swarpagep2 = json_decode($_GET['swarpagep2']);
$swarpagep3 = json_decode($_GET['swarpagep3']);
$swarpagep4 = json_decode($_GET['swarpagep4']);
$swarpagep5 = json_decode($_GET['swarpagep5']);


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
$efai001 = new efai001();

$efai001->setcustcode($intlotdata2->custcode);
$efai001->setintlot($intlotno);
$efai001->setwswr($data->wswr);
$efai001->setswrno($data->swrno);
$efai001->setwafercondition($data->wcondition);
$efai001->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai001->setwaferboatslotting($data->waferboatslotting);
$efai001->sethighmaginspectionrequired($data->highmaginspectionrequired);
$efai001->setremarks($data->remarks);
$efai001->setlastupdatedby($_SESSION['idno']);
$success = $efai001->AddeFAI001();

if($success == true)
{
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';

    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('001');
            $reject->setmachine('');
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d h:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);
            $reject->AddReject();
        }
    }

    if(count($sinitialthicknesswaferno) > 0)
    {
        $initialthickness = new InitialThickness;

        for($x=0;$x<count($sinitialthicknesswaferno);$x++){
            $initialthickness->setintlotno($intlotno);
            $initialthickness->setcustcode($intlotdata2->custcode);
            $initialthickness->setwaferno($sinitialthicknesswaferno[$x]);
            $initialthickness->setp1($sinitialthicknessp1[$x]);
            $initialthickness->setp2($sinitialthicknessp2[$x]);
            $initialthickness->setp3($sinitialthicknessp3[$x]);
            $initialthickness->setp4($sinitialthicknessp4[$x]);
            $initialthickness->setp5($sinitialthicknessp5[$x]);
            $initialthickness->setlastupdate(date("Y-m-d h:i:s"));
            $initialthickness->setlastupdatedby($_SESSION['idno']);
            $initialthickness->AddInitialThickness();
        }
    }

    if(count($sinkdotheightwaferno) > 0)
    {
        $inkdotheight = new InkDotHeight;

        for($x=0;$x<count($sinkdotheightwaferno);$x++){
            $inkdotheight->setintlotno($intlotno);
            $inkdotheight->setcustcode($intlotdata2->custcode);
            $inkdotheight->setwaferno($sinkdotheightwaferno[$x]);
            $inkdotheight->setp1($sinkdotheightp1[$x]);
            $inkdotheight->setp2($sinkdotheightp2[$x]);
            $inkdotheight->setp3($sinkdotheightp3[$x]);
            $inkdotheight->setp4($sinkdotheightp4[$x]);
            $inkdotheight->setp5($sinkdotheightp5[$x]);
            $inkdotheight->setlastupdate(date("Y-m-d h:i:s"));
            $inkdotheight->setlastupdatedby($_SESSION['idno']);
            $inkdotheight->AddInkDotHeight();
        }
    }

    if(count($sbumpheightwaferno) > 0)
    {
        $bumpheight = new BumpHeight;

        for($x=0;$x<count($sbumpheightwaferno);$x++){
            $bumpheight->setintlotno($intlotno);
            $bumpheight->setcustcode($intlotdata2->custcode);
            $bumpheight->setwaferno($sbumpheightwaferno[$x]);
            $bumpheight->setp1($sbumpheightp1[$x]);
            $bumpheight->setp2($sbumpheightp2[$x]);
            $bumpheight->setp3($sbumpheightp3[$x]);
            $bumpheight->setp4($sbumpheightp4[$x]);
            $bumpheight->setp5($sbumpheightp5[$x]);
            $bumpheight->setlastupdate(date("Y-m-d h:i:s"));
            $bumpheight->setlastupdatedby($_SESSION['idno']);
            $bumpheight->AddBumpHeight();
        }
    }

    if(count($swarpagewaferno) > 0)
    {
        $warpage = new Warpage;

        for($x=0;$x<count($swarpagewaferno);$x++){
            $warpage->setintlotno($intlotno);
            $warpage->setcustcode($intlotdata2->custcode);
            $warpage->setwaferno($swarpagewaferno[$x]);
            $warpage->setp1($swarpagep1[$x]);
            $warpage->setp2($swarpagep2[$x]);
            $warpage->setp3($swarpagep3[$x]);
            $warpage->setp4($swarpagep4[$x]);
            $warpage->setp5($swarpagep5[$x]);
            $warpage->setlastupdate(date("Y-m-d h:i:s"));
            $warpage->setlastupdatedby($_SESSION['idno']);
            $warpage->AddWarpage();
        }
    }
}
else
{
    echo "error_Can't Connect to Database!";
}


?>