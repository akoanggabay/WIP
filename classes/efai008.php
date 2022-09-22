<?php
include_once("connection.php");

class efai008 {
    private $custcode;
    private $intlot;
    private $machine;
    private $faicat;
    private $wswr;
    private $swrno;
    private $wafersaw;
    private $wafertype;
    private $requiredwaferthickness;
    private $actualwaferthickness;
    private $streetwidth;
    private $actualdiesize;
    private $requiredwaferorientation;
    private $actualwaferorientation;
    private $processmode;
    private $cutmode;
    private $cuttingposition;
    private $cutmethod;
    private $chopperseed;
    private $cuttingchannelseq;
    private $channelthetarotation;
    private $bladetype;
    private $flangsizez1;
    private $flangsizez2;
    private $bladepartnousedz1;
    private $bladepartnousedz2;
    private $bladelotnoz1;
    private $bladelotnoz2;
    private $bladeheight;
    private $bladeheightz1;
    private $bladeheightz2;
    private $indexsizech1;
    private $indexsizech2;
    private $bladeexposurez1;
    private $bladeexposurez2;
    private $bladecutlengthz1;
    private $bladecutlengthz2;
    private $spindlerevz1;
    private $spindlerevz2;
    private $feedspeed;
    private $cutwidth;
    private $sizedataselection;
    private $specificdata;
    private $bladecoolerz1;
    private $bladecoolerz2;
    private $showerz1;
    private $showerz2;
    private $sprayz1;
    private $sprayz2;
    private $dicingtapetype;
    private $dicingtapeused;
    private $dicingtapethickness;
    private $uvcuringtime;
    private $chucktableworkwith;
    private $chucktableworkwithout;
    private $surfactant;
    private $surfactantinjectiontype;
    private $strokerate;
    private $strokelength;
    private $staycleanconcentration;
    private $purgingdone;
    private $cleaningbbdsensordone;
    private $readingz1close;
    private $readingz2close;
    private $readingz1open;
    private $readingz2open;
    private $cleaningncssensordone;
    private $readingncs1;
    private $readingncs2;
    private $cleaningwheelmountdone;
    private $sensorcalibrationdone;
    private $dryparamtime;
    private $dryparamrpm;
    private $atomcleanairpressure;
    private $spinnertableworkwith;
    private $spinnertableworkwithout;
    private $diwatertemp;
    private $diwaterpressure;
    private $diwaterresistivity;
    private $cleaningcuttingtabledone;
    private $cleaningspinnertabledone;
    private $firstcutline;
    private $hairline;
    private $priorcutting;
    private $duringcutting;
    private $backsidechipoutx;
    private $backsidechipouty;
    private $kerfwidthmonitoring;
    private $setupwaferdone;
    private $vifirstwafer;
    private $wafernoinspected;
    private $techemp;
    private $qcemp;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
    private $feedspeedz1;
    private $feedspeedz2;
    private $sawtype;
	


	function __construct(){

	}

	//setter

	public function setcustcode($custcode){$this->custcode=$custcode;}
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setmachine($machine){$this->machine=$machine;}
    public function setfaicat($faicat){$this->faicat=$faicat;}
    public function setwswr($wswr){$this->wswr=$wswr;}
    public function setswrno($swrno){$this->swrno=$swrno;}
    public function setwafersaw($wafersaw){$this->wafersaw=$wafersaw;}
    public function setwafertype($wafertype){$this->wafertype=$wafertype;}
    public function setrequiredwaferthickness($requiredwaferthickness){$this->requiredwaferthickness=$requiredwaferthickness;}
    public function setactualwaferthickness($actualwaferthickness){$this->actualwaferthickness=$actualwaferthickness;}
    public function setstreetwidth($streetwidth){$this->streetwidth=$streetwidth;}
    public function setactualdiesize($actualdiesize){$this->actualdiesize=$actualdiesize;}
    public function setrequiredwaferorientation($requiredwaferorientation){$this->requiredwaferorientation=$requiredwaferorientation;}
    public function setactualwaferorientation($actualwaferorientation){$this->actualwaferorientation=$actualwaferorientation;}
    public function setprocessmode($processmode){$this->processmode=$processmode;}
    public function setcutmode($cutmode){$this->cutmode=$cutmode;}
    public function setcuttingposition($cuttingposition){$this->cuttingposition=$cuttingposition;}
    public function setcutmethod($cutmethod){$this->cutmethod=$cutmethod;}
    public function setchopperseed($chopperseed){$this->chopperseed=$chopperseed;}
    public function setcuttingchannelseq($cuttingchannelseq){$this->cuttingchannelseq=$cuttingchannelseq;}
    public function setchannelthetarotation($channelthetarotation){$this->channelthetarotation=$channelthetarotation;}
    public function setbladetype($bladetype){$this->bladetype=$bladetype;}
    public function setflangsizez1($flangsizez1){$this->flangsizez1=$flangsizez1;}
    public function setflangsizez2($flangsizez2){$this->flangsizez2=$flangsizez2;}
    public function setbladepartnousedz1($bladepartnousedz1){$this->bladepartnousedz1=$bladepartnousedz1;}
    public function setbladepartnousedz2($bladepartnousedz2){$this->bladepartnousedz2=$bladepartnousedz2;}
    public function setbladelotnoz1($bladelotnoz1){$this->bladelotnoz1=$bladelotnoz1;}
    public function setbladelotnoz2($bladelotnoz2){$this->bladelotnoz2=$bladelotnoz2;}
    public function setbladeheight($bladeheight){$this->bladeheight=$bladeheight;}
    public function setbladeheightz1($bladeheightz1){$this->bladeheightz1=$bladeheightz1;}
    public function setbladeheightz2($bladeheightz2){$this->bladeheightz2=$bladeheightz2;}
    public function setindexsizech1($indexsizech1){$this->indexsizech1=$indexsizech1;}
    public function setindexsizech2($indexsizech2){$this->indexsizech2=$indexsizech2;}
    public function setbladeexposurez1($bladeexposurez1){$this->bladeexposurez1=$bladeexposurez1;}
    public function setbladeexposurez2($bladeexposurez2){$this->bladeexposurez2=$bladeexposurez2;}
    public function setbladecutlengthz1($bladecutlengthz1){$this->bladecutlengthz1=$bladecutlengthz1;}
    public function setbladecutlengthz2($bladecutlengthz2){$this->bladecutlengthz2=$bladecutlengthz2;}
    public function setspindlerevz1($spindlerevz1){$this->spindlerevz1=$spindlerevz1;}
    public function setspindlerevz2($spindlerevz2){$this->spindlerevz2=$spindlerevz2;}
    public function setfeedspeed($feedspeed){$this->feedspeed=$feedspeed;}
    public function setcutwidth($cutwidth){$this->cutwidth=$cutwidth;}
    public function setsizedataselection($sizedataselection){$this->sizedataselection=$sizedataselection;}
    public function setspecificdata($specificdata){$this->specificdata=$specificdata;}
    public function setbladecoolerz1($bladecoolerz1){$this->bladecoolerz1=$bladecoolerz1;}
    public function setbladecoolerz2($bladecoolerz2){$this->bladecoolerz2=$bladecoolerz2;}
    public function setshowerz1($showerz1){$this->showerz1=$showerz1;}
    public function setshowerz2($showerz2){$this->showerz2=$showerz2;}
    public function setsprayz1($sprayz1){$this->sprayz1=$sprayz1;}
    public function setsprayz2($sprayz2){$this->sprayz2=$sprayz2;}
    public function setdicingtapetype($dicingtapetype){$this->dicingtapetype=$dicingtapetype;}
    public function setdicingtapeused($dicingtapeused){$this->dicingtapeused=$dicingtapeused;}
    public function setdicingtapethickness($dicingtapethickness){$this->dicingtapethickness=$dicingtapethickness;}
    public function setuvcuringtime($uvcuringtime){$this->uvcuringtime=$uvcuringtime;}
    public function setchucktableworkwith($chucktableworkwith){$this->chucktableworkwith=$chucktableworkwith;}
    public function setchucktableworkwithout($chucktableworkwithout){$this->chucktableworkwithout=$chucktableworkwithout;}
    public function setsurfactant($surfactant){$this->surfactant=$surfactant;}
    public function setsurfactantinjectiontype($surfactantinjectiontype){$this->surfactantinjectiontype=$surfactantinjectiontype;}
    public function setstrokerate($strokerate){$this->strokerate=$strokerate;}
    public function setstrokelength($strokelength){$this->strokelength=$strokelength;}
    public function setstaycleanconcentration($staycleanconcentration){$this->staycleanconcentration=$staycleanconcentration;}
    public function setpurgingdone($purgingdone){$this->purgingdone=$purgingdone;}
    public function setcleaningbbdsensordone($cleaningbbdsensordone){$this->cleaningbbdsensordone=$cleaningbbdsensordone;}
    public function setreadingz1close($readingz1close){$this->readingz1close=$readingz1close;}
    public function setreadingz2close($readingz2close){$this->readingz2close=$readingz2close;}
    public function setreadingz1open($readingz1open){$this->readingz1open=$readingz1open;}
    public function setreadingz2open($readingz2open){$this->readingz2open=$readingz2open;}
    public function setcleaningncssensordone($cleaningncssensordone){$this->cleaningncssensordone=$cleaningncssensordone;}
    public function setreadingncs1($readingncs1){$this->readingncs1=$readingncs1;}
    public function setreadingncs2($readingncs2){$this->readingncs2=$readingncs2;}
    public function setcleaningwheelmountdone($cleaningwheelmountdone){$this->cleaningwheelmountdone=$cleaningwheelmountdone;}
    public function setsensorcalibrationdone($sensorcalibrationdone){$this->sensorcalibrationdone=$sensorcalibrationdone;}
    public function setdryparamtime($dryparamtime){$this->dryparamtime=$dryparamtime;}
    public function setdryparamrpm($dryparamrpm){$this->dryparamrpm=$dryparamrpm;}
    public function setatomcleanairpressure($atomcleanairpressure){$this->atomcleanairpressure=$atomcleanairpressure;}
    public function setspinnertableworkwith($spinnertableworkwith){$this->spinnertableworkwith=$spinnertableworkwith;}
    public function setspinnertableworkwithout($spinnertableworkwithout){$this->spinnertableworkwithout=$spinnertableworkwithout;}
    public function setdiwatertemp($diwatertemp){$this->diwatertemp=$diwatertemp;}
    public function setdiwaterpressure($diwaterpressure){$this->diwaterpressure=$diwaterpressure;}
    public function setdiwaterresistivity($diwaterresistivity){$this->diwaterresistivity=$diwaterresistivity;}
    public function setcleaningcuttingtabledone($cleaningcuttingtabledone){$this->cleaningcuttingtabledone=$cleaningcuttingtabledone;}
    public function setcleaningspinnertabledone($cleaningspinnertabledone){$this->cleaningspinnertabledone=$cleaningspinnertabledone;}
    public function setfirstcutline($firstcutline){$this->firstcutline=$firstcutline;}
    public function sethairline($hairline){$this->hairline=$hairline;}
    public function setpriorcutting($priorcutting){$this->priorcutting=$priorcutting;}
    public function setduringcutting($duringcutting){$this->duringcutting=$duringcutting;}
    public function setbacksidechipoutx($backsidechipoutx){$this->backsidechipoutx=$backsidechipoutx;}
    public function setbacksidechipouty($backsidechipouty){$this->backsidechipouty=$backsidechipouty;}
    public function setkerfwidthmonitoring($kerfwidthmonitoring){$this->kerfwidthmonitoring=$kerfwidthmonitoring;}
    public function setsetupwaferdone($setupwaferdone){$this->setupwaferdone=$setupwaferdone;}
    public function setvifirstwafer($vifirstwafer){$this->vifirstwafer=$vifirstwafer;}
    public function setwafernoinspected($wafernoinspected){$this->wafernoinspected=$wafernoinspected;}
    public function settechemp($techemp){$this->techemp=$techemp;}
    public function setqcemp($qcemp){$this->qcemp=$qcemp;}
    public function setremarks($remarks){$this->remarks=$remarks;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}
    public function setfeedspeedz1($feedspeedz1){$this->feedspeedz1=$feedspeedz1;}
    public function setfeedspeedz2($feedspeedz2){$this->feedspeedz2=$feedspeedz2;}
    public function setsawtype($sawtype){$this->sawtype=$sawtype;}

	//Getter

    public function getcustcode(){return $this->custcode;}
    public function getintlot(){return $this->intlot;}
    public function getmachine(){return $this->machine;}
    public function getfaicat(){return $this->faicat;}
    public function getwswr(){return $this->wswr;}
    public function getswrno(){return $this->swrno;}
    public function getwafersaw(){return $this->wafersaw;}
    public function getwafertype(){return $this->wafertype;}
    public function getrequiredwaferthickness(){return $this->requiredwaferthickness;}
    public function getactualwaferthickness(){return $this->actualwaferthickness;}
    public function getstreetwidth(){return $this->streetwidth;}
    public function getactualdiesize(){return $this->actualdiesize;}
    public function getrequiredwaferorientation(){return $this->requiredwaferorientation;}
    public function getactualwaferorientation(){return $this->actualwaferorientation;}
    public function getprocessmode(){return $this->processmode;}
    public function getcutmode(){return $this->cutmode;}
    public function getcuttingposition(){return $this->cuttingposition;}
    public function getcutmethod(){return $this->cutmethod;}
    public function getchopperseed(){return $this->chopperseed;}
    public function getcuttingchannelseq(){return $this->cuttingchannelseq;}
    public function getchannelthetarotation(){return $this->channelthetarotation;}
    public function getbladetype(){return $this->bladetype;}
    public function getflangsizez1(){return $this->flangsizez1;}
    public function getflangsizez2(){return $this->flangsizez2;}
    public function getbladepartnousedz1(){return $this->bladepartnousedz1;}
    public function getbladepartnousedz2(){return $this->bladepartnousedz2;}
    public function getbladelotnoz1(){return $this->bladelotnoz1;}
    public function getbladelotnoz2(){return $this->bladelotnoz2;}
    public function getbladeheight(){return $this->bladeheight;}
    public function getbladeheightz1(){return $this->bladeheightz1;}
    public function getbladeheightz2(){return $this->bladeheightz2;}
    public function getindexsizech1(){return $this->indexsizech1;}
    public function getindexsizech2(){return $this->indexsizech2;}
    public function getbladeexposurez1(){return $this->bladeexposurez1;}
    public function getbladeexposurez2(){return $this->bladeexposurez2;}
    public function getbladecutlengthz1(){return $this->bladecutlengthz1;}
    public function getbladecutlengthz2(){return $this->bladecutlengthz2;}
    public function getspindlerevz1(){return $this->spindlerevz1;}
    public function getspindlerevz2(){return $this->spindlerevz2;}
    public function getfeedspeed(){return $this->feedspeed;}
    public function getcutwidth(){return $this->cutwidth;}
    public function getsizedataselection(){return $this->sizedataselection;}
    public function getspecificdata(){return $this->specificdata;}
    public function getbladecoolerz1(){return $this->bladecoolerz1;}
    public function getbladecoolerz2(){return $this->bladecoolerz2;}
    public function getshowerz1(){return $this->showerz1;}
    public function getshowerz2(){return $this->showerz2;}
    public function getsprayz1(){return $this->sprayz1;}
    public function getsprayz2(){return $this->sprayz2;}
    public function getdicingtapetype(){return $this->dicingtapetype;}
    public function getdicingtapeused(){return $this->dicingtapeused;}
    public function getdicingtapethickness(){return $this->dicingtapethickness;}
    public function getuvcuringtime(){return $this->uvcuringtime;}
    public function getchucktableworkwith(){return $this->chucktableworkwith;}
    public function getchucktableworkwithout(){return $this->chucktableworkwithout;}
    public function getsurfactant(){return $this->surfactant;}
    public function getsurfactantinjectiontype(){return $this->surfactantinjectiontype;}
    public function getstrokerate(){return $this->strokerate;}
    public function getstrokelength(){return $this->strokelength;}
    public function getstaycleanconcentration(){return $this->staycleanconcentration;}
    public function getpurgingdone(){return $this->purgingdone;}
    public function getcleaningbbdsensordone(){return $this->cleaningbbdsensordone;}
    public function getreadingz1close(){return $this->readingz1close;}
    public function getreadingz2close(){return $this->readingz2close;}
    public function getreadingz1open(){return $this->readingz1open;}
    public function getreadingz2open(){return $this->readingz2open;}
    public function getcleaningncssensordone(){return $this->cleaningncssensordone;}
    public function getreadingncs1(){return $this->readingncs1;}
    public function getreadingncs2(){return $this->readingncs2;}
    public function getcleaningwheelmountdone(){return $this->cleaningwheelmountdone;}
    public function getsensorcalibrationdone(){return $this->sensorcalibrationdone;}
    public function getdryparamtime(){return $this->dryparamtime;}
    public function getdryparamrpm(){return $this->dryparamrpm;}
    public function getatomcleanairpressure(){return $this->atomcleanairpressure;}
    public function getspinnertableworkwith(){return $this->spinnertableworkwith;}
    public function getspinnertableworkwithout(){return $this->spinnertableworkwithout;}
    public function getdiwatertemp(){return $this->diwatertemp;}
    public function getdiwaterpressure(){return $this->diwaterpressure;}
    public function getdiwaterresistivity(){return $this->diwaterresistivity;}
    public function getcleaningcuttingtabledone(){return $this->cleaningcuttingtabledone;}
    public function getcleaningspinnertabledone(){return $this->cleaningspinnertabledone;}
    public function getfirstcutline(){return $this->firstcutline;}
    public function gethairline(){return $this->hairline;}
    public function getpriorcutting(){return $this->priorcutting;}
    public function getduringcutting(){return $this->duringcutting;}
    public function getbacksidechipoutx(){return $this->backsidechipoutx;}
    public function getbacksidechipouty(){return $this->backsidechipouty;}
    public function getkerfwidthmonitoring(){return $this->kerfwidthmonitoring;}
    public function getsetupwaferdone(){return $this->setupwaferdone;}
    public function getvifirstwafer(){return $this->vifirstwafer;}
    public function getwafernoinspected(){return $this->wafernoinspected;}
    public function gettechemp(){return $this->techemp;}
    public function getqcemp(){return $this->qcemp;}
    public function getremarks(){return $this->remarks;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}
    public function getfeedspeedz1(){return $this->feedspeedz1;}
    public function getfeedspeedz2(){return $this->feedspeedz2;}
    public function getsawtype(){return $this->sawtype;}

    public function AddeFAI008(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai008 (custcode,
            intlot,
            machine,
            faicat,
            wswr,
            swrno,
            wafertype,
            requiredwaferthickness,
            actualwaferthickness,
            streetwidth,
            actualdiesize,
            requiredwaferorientation,
            actualwaferorientation,
            processmode,
            cutmode,
            cuttingposition,
            cutmethod,
            chopperseed,
            cuttingchannelseq,
            channelthetarotation,
            bladetype,
            flangsizez1,
            flangsizez2,
            bladepartnousedz1,
            bladepartnousedz2,
            bladelotnoz1,
            bladelotnoz2,
            bladeheight,
            bladeheightz1,
            bladeheightz2,
            indexsizech1,
            indexsizech2,
            bladeexposurez1,
            bladeexposurez2,
            bladecutlengthz1,
            bladecutlengthz2,
            spindlerevz1,
            spindlerevz2,
            feedspeed,
            cutwidth,
            sizedataselection,
            specificdata,
            bladecoolerz1,
            bladecoolerz2,
            showerz1,
            showerz2,
            sprayz1,
            sprayz2,
            dicingtapetype,
            dicingtapeused,
            dicingtapethickness,
            uvcuringtime,
            chucktableworkwith,
            chucktableworkwithout,
            surfactant,
            surfactantinjectiontype,
            strokerate,
            strokelength,
            staycleanconcentration,
            purgingdone,
            cleaningbbdsensordone,
            readingz1close,
            readingz2close,
            readingz1open,
            readingz2open,
            cleaningncssensordone,
            readingncs1,
            readingncs2,
            cleaningwheelmountdone,
            sensorcalibrationdone,
            dryparamtime,
            dryparamrpm,
            atomcleanairpressure,
            spinnertableworkwith,
            spinnertableworkwithout,
            diwatertemp,
            diwaterpressure,
            diwaterresistivity,
            cleaningcuttingtabledone,
            cleaningspinnertabledone,
            firstcutline,
            hairline,
            priorcutting,
            duringcutting,
            backsidechipoutx,
            backsidechipouty,
            kerfwidthmonitoring,
            setupwaferdone,
            vifirstwafer,
            wafernoinspected,
            techemp,
            qcemp,
            remarks,
            lastupdate,
            lastupdatedby,
            active,
            feedspeedz1,
            feedspeedz2,
            sawtype,
            wafersaw
            ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),
            $this->getintlot(),
            $this->getmachine(),
            $this->getfaicat(),
            $this->getwswr(),
            $this->getswrno(),
            $this->getwafertype(),
            $this->getrequiredwaferthickness(),
            $this->getactualwaferthickness(),
            $this->getstreetwidth(),
            $this->getactualdiesize(),
            $this->getrequiredwaferorientation(),
            $this->getactualwaferorientation(),
            $this->getprocessmode(),
            $this->getcutmode(),
            $this->getcuttingposition(),
            $this->getcutmethod(),
            $this->getchopperseed(),
            $this->getcuttingchannelseq(),
            $this->getchannelthetarotation(),
            $this->getbladetype(),
            $this->getflangsizez1(),
            $this->getflangsizez2(),
            $this->getbladepartnousedz1(),
            $this->getbladepartnousedz2(),
            $this->getbladelotnoz1(),
            $this->getbladelotnoz2(),
            $this->getbladeheight(),
            $this->getbladeheightz1(),
            $this->getbladeheightz2(),
            $this->getindexsizech1(),
            $this->getindexsizech2(),
            $this->getbladeexposurez1(),
            $this->getbladeexposurez2(),
            $this->getbladecutlengthz1(),
            $this->getbladecutlengthz2(),
            $this->getspindlerevz1(),
            $this->getspindlerevz2(),
            $this->getfeedspeed(),
            $this->getcutwidth(),
            $this->getsizedataselection(),
            $this->getspecificdata(),
            $this->getbladecoolerz1(),
            $this->getbladecoolerz2(),
            $this->getshowerz1(),
            $this->getshowerz2(),
            $this->getsprayz1(),
            $this->getsprayz2(),
            $this->getdicingtapetype(),
            $this->getdicingtapeused(),
            $this->getdicingtapethickness(),
            $this->getuvcuringtime(),
            $this->getchucktableworkwith(),
            $this->getchucktableworkwithout(),
            $this->getsurfactant(),
            $this->getsurfactantinjectiontype(),
            $this->getstrokerate(),
            $this->getstrokelength(),
            $this->getstaycleanconcentration(),
            $this->getpurgingdone(),
            $this->getcleaningbbdsensordone(),
            $this->getreadingz1close(),
            $this->getreadingz2close(),
            $this->getreadingz1open(),
            $this->getreadingz2open(),
            $this->getcleaningncssensordone(),
            $this->getreadingncs1(),
            $this->getreadingncs2(),
            $this->getcleaningwheelmountdone(),
            $this->getsensorcalibrationdone(),
            $this->getdryparamtime(),
            $this->getdryparamrpm(),
            $this->getatomcleanairpressure(),
            $this->getspinnertableworkwith(),
            $this->getspinnertableworkwithout(),
            $this->getdiwatertemp(),
            $this->getdiwaterpressure(),
            $this->getdiwaterresistivity(),
            $this->getcleaningcuttingtabledone(),
            $this->getcleaningspinnertabledone(),
            $this->getfirstcutline(),
            $this->gethairline(),
            $this->getpriorcutting(),
            $this->getduringcutting(),
            $this->getbacksidechipoutx(),
            $this->getbacksidechipouty(),
            $this->getkerfwidthmonitoring(),
            $this->getsetupwaferdone(),
            $this->getvifirstwafer(),
            $this->getwafernoinspected(),
            $this->gettechemp(),
            $this->getqcemp(),
            $this->getremarks(),
            date("Y-m-d H:i:s"),
            $this->getlastupdatedby(),
            1,
            $this->getfeedspeedz1(),
            $this->getfeedspeedz2(),
            $this->getsawtype(),
            $this->getwafersaw()
            );
            $stmt = sqlsrv_query( $con, $sql, $params);
            $row = sqlsrv_rows_affected($stmt);
            if($row == true)
            {
                $success = true;
            }
            else
            {
                $success = false;
            }
			//$conn->close();
		}catch(Exception $e){
            $success = false;
		}
        return $success;	
	}

    function sample() {
        $conn = new Connection();
        $result = [];
        $column = array();

		try{
            $conn->open();
            $dataset = $conn->query("SELECT * from efai007");
			if ($conn->has_rows($dataset)) {
                
                while ($row = $conn->fetch_array($dataset)) {
                    array_push($result,$row);
                }
			}
			else
			{
				$result = 'false';
			}
            
			$conn->close();
			
		}catch(Exception $e){
			$result = 'false';
			echo $e;
		}
		return $result;
    }
}

$efai008 = new efai008;
$test = $efai008->sample();
//print_r($test);
//echo (json_encode($test));
/* $test2 = json_encode($test);
$test3 = json_decode($test2); */
/* echo $test3; */
/* foreach($test[0] as $key => $value)
{
    print($key." ".$value);
} */

?>