<?php
include_once("../classes/efai015.php");
include_once("../classes/intlotno.php");
include_once("../classes/indexsize.php");
include_once("../classes/washparameter.php");
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


//json index size
$sisch = json_decode($_GET['sisch']);
$sis1 = json_decode($_GET['sis1']);
$sis2 = json_decode($_GET['sis2']);
$sis3 = json_decode($_GET['sis3']);
$sis4 = json_decode($_GET['sis4']);

//json wash parameter
$swptime = json_decode($_GET['swptime']);
//$swprpm = json_decode($_GET['swprpm']);
$total = 0;

$exist = IntLotno::checkExist($intlotno);
$techexist = passcode::checkExist($data->techemp,'tech');
$qcexist = passcode::checkExist($data->qcemp,'qc');

$successrej = false;
$successis = false;
$successwp = false;

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
$efai015 = new efai015();

$efai015->setcustcode($intlotdata2->custcode);
$efai015->setintlot($intlotno);
$efai015->setmachine($data->machine);
$efai015->setwswr($data->wswr);
$efai015->setswrno($data->swrno);
$efai015->setfaicat($data->faicat);
$efai015->setpackagetype($data->packagetype);
$efai015->setstripno($data->stripno);
$efai015->setpackagethickness($data->packagethickness);
$efai015->setpackagesize($data->packagesize);
$efai015->setarraysize($data->arraysize);
$efai015->setrequiredpackagethickness($data->requiredpackagethickness);
$efai015->setactualpackagethickness($data->actualpackagethickness);
$efai015->setrequiredpackageorientation($data->requiredpackageorientation);
$efai015->setactualpackageorientation($data->actualpackageorientation);
$efai015->setprocessmode($data->processmode);
$efai015->setcutmode($data->cutmode);
$efai015->setcutmethod($data->cutmethod);
$efai015->settypeofblade($data->typeofblade);
$efai015->setcleaningflangedone($data->cleaningflangedone);
$efai015->setflangesizez1($data->flangesizez1);
$efai015->setflangesizez2($data->flangesizez2);
$efai015->setbladedescz1($data->bladedescz1);
$efai015->setbladedescz2($data->bladedescz2);
$efai015->setbladelotnoz1($data->bladelotnoz1);
$efai015->setbladelotnoz2($data->bladelotnoz2);
$efai015->setcuttingchannelsequence($data->cuttingchannelsequence);
$efai015->setchannelthetarotation($data->ch1.','.$data->ch2.','.$data->ch3.','.$data->ch4);
$efai015->setindexsizech1($data->indexsizech1);
$efai015->setindexsizech2($data->indexsizech2);
$efai015->setbladeheightz1($data->bladeheightz1);
$efai015->setbladeheightz2($data->bladeheightz2);
$efai015->setbladeexposurez1($data->bladeexposurez1);
$efai015->setbladeexposurez2($data->bladeexposurez2);
$efai015->setbladecutlengthz1($data->bladecutlengthz1);
$efai015->setbladecutlengthz2($data->bladecutlengthz2);
$efai015->setspindlerevz1($data->spindlerevz1);
$efai015->setspindlerevz2($data->spindlerevz2);
$efai015->setfeedspeedz1($data->feedspeedz1);
$efai015->setfeedspeedz2($data->feedspeedz2);
$efai015->setbladecoolerz1($data->bladecoolerz1);
$efai015->setbladecoolerz2($data->bladecoolerz2);
$efai015->setshowerz1($data->showerz1);
$efai015->setshowerz2($data->showerz2);
$efai015->setsprayz1($data->sprayz1);
$efai015->setsprayz2($data->sprayz2);
$efai015->setdicingtapetype($data->dicingtapetype);
$efai015->setdicingtapeused($data->dicingtapeused);
$efai015->setdicingtapethickness($data->dicingtapethickness);
$efai015->setchucktablevacuumwith($data->chucktablevacuumwith);
$efai015->setchucktablevacuumwithout($data->chucktablevacuumwithout);
$efai015->setsurfactant($data->surfactant);
$efai015->setstrokerate($data->strokerate);
$efai015->setstrokelength($data->strokelength);
$efai015->setpurgingdone($data->purgingdone);
$efai015->setbladeconditionchecking($data->bladeconditionchecking);
$efai015->setcleaningbbdsensor($data->cleaningbbdsensor);
$efai015->setreadingz1close($data->readingz1close);
$efai015->setreadingz2close($data->readingz2close);
$efai015->setreadingz1open($data->readingz1open);
$efai015->setreadingz2open($data->readingz2open);
$efai015->setcleaningwheelmountdone($data->cleaningwheelmountdone);
$efai015->setbladesetupdone($data->bladesetupdone);
$efai015->setcleaningchucktabledone($data->cleaningchucktabledone);
$efai015->setcleaningncssensordone($data->cleaningncssensordone);
$efai015->setreadingncs1($data->readingncs1);
$efai015->setreadingncs2($data->readingncs2);
$efai015->setcleaningspinnertabledone($data->cleaningspinnertabledone);
$efai015->setdryparamtime($data->dryparamtime);
$efai015->setdryparamrpm($data->dryparamrpm);
$efai015->setspinnerwaterpressure($data->spinnerwaterpressure);
$efai015->setspinnertablewith($data->spinnertablewith);
$efai015->setspinnertablewithout($data->spinnertablewithout);
$efai015->setdiwatertemp($data->diwatertemp);
$efai015->setdiwaterpressure($data->diwaterpressure);
$efai015->setdiwaterresistivity($data->diwaterresistivity);
$efai015->setcutcenteredoncutline($data->cutcenteredoncutline);
$efai015->sethairlinecutpositionadjust($data->hairlinecutpositionadjust);
$efai015->setpriorcutting($data->priorcutting);
$efai015->setduringcutting($data->duringcutting);
$efai015->setpackagedimensionrecordedspc($data->packagedimensionrecordedspc);
$efai015->setvifirstpanel($data->vifirstpanel);
$efai015->setpanelnoinspected($data->panelnoinspected);
$efai015->settechemp($data->techemp);
$efai015->setqcemp($data->qcemp);
$efai015->setremarks($data->remarks);
$efai015->setlastupdate(date("Y-m-d H:i:s"));
$efai015->setlastupdatedby($_SESSION['idno']);
$efai015->setactive(1);



$success = $efai015->Addefai015();

if($success == true)
{
    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $total += (int) $sdqty[$x];
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('015');
            $reject->setmachine($data->machine);
            $reject->setwaferno($sdwaferno[$x]);
            $reject->setddetails($sddetails[$x]);
            $reject->setdqty($sdqty[$x]);
            $reject->setremarks($sdremarks[$x]);
            $reject->setlastupdate(date("Y-m-d H:i:s"));
            $reject->setlastupdatedby($_SESSION['idno']);

            $successrej = $reject->AddReject();
        }

        /* $ilot = new IntLotno;
        $ilot->updateCurrqty2($intlotno,$intlotdata2->custcode,intval($intlotdata2->currqty) - intval($total)); */
    }

    if(count($sisch) > 0)
    {
        $indexsize = new indexsize;

        for($x=0;$x<count($sisch);$x++){
            $indexsize->setintlot($intlotno);
            $indexsize->setch($sisch[$x]);
            $indexsize->setstation('015');
            $indexsize->setis1($sis1[$x]);
            $indexsize->setis2($sis2[$x]);
            $indexsize->setis3($sis3[$x]);
            $indexsize->setis4($sis4[$x]);
            $indexsize->setis5(0);
            $indexsize->setlastupdate(date("Y-m-d H:i:sa"));
            $indexsize->setlastupdatedby($_SESSION['idno']);

            $successis = $indexsize->Addindexsize();
        }
    }

    if(count($swptime) > 0)
    {
        $washparameter = new washparameter;

        for($x=0;$x<count($swptime);$x++){
            $washparameter->setintlot($intlotno);
            $washparameter->settime($swptime[$x]);
            $washparameter->setrpm($swprpm[$x]);
            $washparameter->setlastupdate(date("Y-m-d H:i:sa"));
            $washparameter->setlastupdatedby($_SESSION['idno']);
        
            $successwp = $washparameter->AddWashParameter();
        }
    }
    
}
else
{
    echo "error_Can't Connect to Database!";
}


?>