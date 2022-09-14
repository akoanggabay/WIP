<?php
include_once("../classes/efai008.php");
include_once("../classes/intlotno.php");
include_once("../classes/bladeheight.php");
include_once("../classes/indexsize.php");
include_once("../classes/ringcut.php");
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

//json blade height
$sbhch = json_decode($_GET['sbhch']);
$sbh1 = json_decode($_GET['sbh1']);
$sbh2 = json_decode($_GET['sbh2']);
$sbh3 = json_decode($_GET['sbh3']);
$sbh4 = json_decode($_GET['sbh4']);
$sbh5 = json_decode($_GET['sbh5']);

//json index size
$sisch = json_decode($_GET['sisch']);
$sis1 = json_decode($_GET['sis1']);
$sis2 = json_decode($_GET['sis2']);
$sis3 = json_decode($_GET['sis3']);
$sis4 = json_decode($_GET['sis4']);
$sis5 = json_decode($_GET['sis5']);

//json ringcut
$srcwaferno = json_decode($_GET['srcwaferno']);
$srcmeasurement = json_decode($_GET['srcmeasurement']);

//json wash parameter
$swptime = json_decode($_GET['swptime']);
$swprpm = json_decode($_GET['swprpm']);
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
$efai008 = new efai008();

$efai008->setcustcode($intlotdata2->custcode);
$efai008->setintlot($intlotno);
$efai008->setmachine($data->machine);
$efai008->setfaicat($data->faicat);
$efai008->setwswr($data->wswr);
$efai008->setswrno($data->swrno);
$efai008->setwafertype($data->wtype === 'others' ? $_GET['wtypeothers'] : $data->wtype);
$efai008->setrequiredwaferthickness($data->requiredwaferthickness);
$efai008->setactualwaferthickness($data->actualwaferthickness);
$efai008->setstreetwidth($data->streetwidth);
$efai008->setactualdiesize($data->actualdiesize);
$efai008->setrequiredwaferorientation($data->requiredwaferorientation);
$efai008->setactualwaferorientation($data->actualwaferorientation);
$efai008->setprocessmode($data->processmode);
$efai008->setcutmode($data->cutmode);
$efai008->setcuttingposition($data->cuttingposition);
$efai008->setcutmethod($data->cutmethod);
$efai008->setchopperseed($data->chopperseed);
$efai008->setcuttingchannelseq($data->cuttingchannelseq);
$efai008->setchannelthetarotation($data->ch1.','.$data->ch2.','.$data->ch3.','.$data->ch4);
$efai008->setbladetype($data->bladetype);
$efai008->setflangsizez1($data->flangsizez1);
$efai008->setflangsizez2($data->flangsizez2);
$efai008->setbladepartnousedz1($data->bladepartnousedz1);
$efai008->setbladepartnousedz2($data->bladepartnousedz2);
$efai008->setbladelotnoz1($data->bladelotnoz1);
$efai008->setbladelotnoz2($data->bladelotnoz2);
$efai008->setbladeheight($data->bladeheight);
$efai008->setbladeheightz1($data->bladeheightz1);
$efai008->setbladeheightz2($data->bladeheightz2);
$efai008->setindexsizech1($data->indexsizech1);
$efai008->setindexsizech2($data->indexsizech2);
$efai008->setbladeexposurez1($data->bladeexposurez1);
$efai008->setbladeexposurez2($data->bladeexposurez2);
$efai008->setbladecutlengthz1($data->bladecutlengthz1);
$efai008->setbladecutlengthz2($data->bladecutlengthz2);
$efai008->setspindlerevz1($data->spindlerevz1);
$efai008->setspindlerevz2($data->spindlerevz2);
$efai008->setfeedspeed($data->feedspeed);
$efai008->setcutwidth($data->cutwidth);
$efai008->setsizedataselection($data->sizedataselection);
$efai008->setspecificdata($data->specificdata);
$efai008->setbladecoolerz1($data->bladecoolerz1);
$efai008->setbladecoolerz2($data->bladecoolerz2);
$efai008->setshowerz1($data->showerz1);
$efai008->setshowerz2($data->showerz2);
$efai008->setsprayz1($data->sprayz1);
$efai008->setsprayz2($data->sprayz2);
$efai008->setdicingtapetype($data->dicingtapetype);
$efai008->setdicingtapeused($data->dicingtapeused);
$efai008->setdicingtapethickness($data->dicingtapethickness);
$efai008->setuvcuringtime($data->uvcuringtime);
$efai008->setchucktableworkwith($data->chucktableworkwith);
$efai008->setchucktableworkwithout($data->chucktableworkwithout);
$efai008->setsurfactant($data->surfactant);
$efai008->setsurfactantinjectiontype($data->surfactantinjectiontype);
$efai008->setstrokerate($data->strokerate);
$efai008->setstrokelength($data->strokelength);
$efai008->setstaycleanconcentration($data->staycleanconcentration);
$efai008->setpurgingdone($data->purgingdone);
$efai008->setcleaningbbdsensordone($data->cleaningbbdsensordone);
$efai008->setreadingz1close($data->readingz1close);
$efai008->setreadingz2close($data->readingz2close);
$efai008->setreadingz1open($data->readingz1open);
$efai008->setreadingz2open($data->readingz2open);
$efai008->setcleaningncssensordone($data->cleaningncssensordone);
$efai008->setreadingncs1($data->readingncs1);
$efai008->setreadingncs2($data->readingncs2);
$efai008->setcleaningwheelmountdone($data->cleaningwheelmountdone);
$efai008->setsensorcalibrationdone($data->sensorcalibrationdone);
$efai008->setdryparamtime($data->dryparamtime);
$efai008->setdryparamrpm($data->dryparamrpm);
$efai008->setatomcleanairpressure($data->atomcleanairpressure);
$efai008->setspinnertableworkwith($data->spinnertableworkwith);
$efai008->setspinnertableworkwithout($data->spinnertableworkwithout);
$efai008->setdiwatertemp($data->diwatertemp);
$efai008->setdiwaterpressure($data->diwaterpressure);
$efai008->setdiwaterresistivity($data->diwaterresistivity);
$efai008->setcleaningcuttingtabledone($data->cleaningcuttingtabledone);
$efai008->setcleaningspinnertabledone($data->cleaningspinnertabledone);
$efai008->setfirstcutline($data->firstcutline);
$efai008->sethairline($data->hairline);
$efai008->setpriorcutting($data->priorcutting);
$efai008->setduringcutting($data->duringcutting);
$efai008->setbacksidechipoutx($data->backsidechipoutx);
$efai008->setbacksidechipouty($data->backsidechipouty);
$efai008->setkerfwidthmonitoring($data->kerfwidthmonitoring);
$efai008->setsetupwaferdone($data->setupwaferdone);
$efai008->setvifirstwafer($data->vifirstwafer);
$efai008->setwafernoinspected($data->wafernoinspected);
$efai008->settechemp($data->techemp);
$efai008->setqcemp($data->qcemp);
$efai008->setremarks($data->remarks);
$efai008->setlastupdatedby($_SESSION['idno']);
$efai008->setfeedspeedz1($data->feedspeedz1);
$efai008->setfeedspeedz2($data->feedspeedz2);
$efai008->setsawtype($data->sawtype);

$success = $efai008->Addefai008();

if($success == true)
{
    if(count($sdwaferno) > 0)
    {
        $reject = new Reject;

        for($x=0;$x<count($sdwaferno);$x++){
            $total += (int) $sdqty[$x];
            $reject->setintlotno($intlotno);
            $reject->setcustcode($intlotdata2->custcode);
            $reject->setstation('008');
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

    if(count($sbhch) > 0)
    {
        $bladeheight = new bladeheight;

        for($x=0;$x<count($sbhch);$x++){
            $bladeheight->setintlot($intlotno);
            $bladeheight->setch($sisch[$x]);
            $bladeheight->setbh1($sbh1[$x]);
            $bladeheight->setbh2($sbh2[$x]);
            $bladeheight->setbh3($sbh3[$x]);
            $bladeheight->setbh4($sbh4[$x]);
            $bladeheight->setbh5($sbh5[$x]);
            $bladeheight->setlastupdate(date("Y-m-d h:i:s"));
            $bladeheight->setlastupdatedby($_SESSION['idno']);
            $bladeheight->AddBladeHeight();
        }
    }

    if(count($sisch) > 0)
    {
        $indexsize = new indexsize;

        for($x=0;$x<count($sisch);$x++){
            $indexsize->setintlot($intlotno);
            $indexsize->setch($sisch[$x]);
            $indexsize->setstation('008');
            $indexsize->setis1($sis1[$x]);
            $indexsize->setis2($sis2[$x]);
            $indexsize->setis3($sis3[$x]);
            $indexsize->setis4($sis4[$x]);
            $indexsize->setis5($sis5[$x]);
            $indexsize->setlastupdate(date("Y-m-d h:i:s"));
            $indexsize->setlastupdatedby($_SESSION['idno']);
            $indexsize->Addindexsize();
        }
    }

    if(count($srcwaferno) > 0)
    {
        $ringcut = new ringcut;

        for($x=0;$x<count($srcwaferno);$x++){
            $ringcut->setintlot($intlotno);
            $ringcut->setwaferno($srcwaferno[$x]);
            $ringcut->setmeasurement($srcmeasurement[$x]);
            $ringcut->setlastupdate(date("Y-m-d h:i:s"));
            $ringcut->setlastupdatedby($_SESSION['idno']);
            $ringcut->AddRingCut();
        }
    }

    if(count($swptime) > 0)
    {
        $washparameter = new washparameter;

        for($x=0;$x<count($swptime);$x++){
            $washparameter->setintlot($intlotno);
            $washparameter->settime($swptime[$x]);
            $washparameter->setrpm($swprpm[$x]);
            $washparameter->setlastupdate(date("Y-m-d h:i:s"));
            $washparameter->setlastupdatedby($_SESSION['idno']);
            $washparameter->AddWashParameter();
        }
    }
    echo 'success_Success! '.$intlotno.' eFAI details successfully added!';
}
else
{
    echo "error_Can't Connect to Database!";
}


?>