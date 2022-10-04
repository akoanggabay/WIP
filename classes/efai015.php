<?php
include_once("connection.php");

class efai015 {
    
    private $custcode;
    private $intlot;
    private $machine;
    private $wswr;
    private $swrno;
    private $faicat;
    private $packagetype;
    private $stripno;
    private $packagethickness;
    private $packagesize;
    private $arraysize;
    private $requiredpackagethickness;
    private $actualpackagethickness;
    private $requiredpackageorientation;
    private $actualpackageorientation;
    private $processmode;
    private $cutmode;
    private $cutmethod;
    private $typeofblade;
    private $cleaningflangedone;
    private $flangesizez1;
    private $flangesizez2;
    private $bladedescz1;
    private $bladedescz2;
    private $bladelotnoz1;
    private $bladelotnoz2;
    private $cuttingchannelsequence;
    private $channelthetarotation;
    private $indexsizech1;
    private $indexsizech2;
    private $bladeheightz1;
    private $bladeheightz2;
    private $bladecutlengthz1;
    private $bladecutlengthz2;
    private $spindlerevz1;
    private $spindlerevz2;
    private $feedspeedz1;
    private $feedspeedz2;
    private $bladecoolerz1;
    private $bladecoolerz2;
    private $showerz1;
    private $showerz2;
    private $sprayz1;
    private $sprayz2;
    private $dicingtapetype;
    private $dicingtapeused;
    private $dicingtapethickness;
    private $chucktablevacuumwith;
    private $chucktablevacuumwithout;
    private $surfactant;
    private $strokerate;
    private $strokelength;
    private $purgingdone;
    private $bladeconditionchecking;
    private $cleaningbbdsensor;
    private $readingz1close;
    private $readingz2close;
    private $readingz1open;
    private $readingz2open;
    private $cleaningwheelmountdone;
    private $bladesetupdone;
    private $cleaningchucktabledone;
    private $cleaningncssensordone;
    private $readingncs1;
    private $readingncs2;
    private $cleaningspinnertabledone;
    private $dryparamtime;
    private $dryparamrpm;
    private $atomizingcleanairpressure;
    private $spinnertablewith;
    private $spinnertablewithout;
    private $diwatertemp;
    private $diwaterpressure;
    private $diwaterresistivity;
    private $cutcenteredoncutline;
    private $hairlinecutpositionadjust;
    private $priorcutting;
    private $duringcutting;
    private $packagedimensionrecordedspc;
    private $vifirstpanel;
    private $panelnoinspected;
    private $techemp;
    private $qcemp;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
    private $bladeexposurez1;
    private $bladeexposurez2;




	function __construct(){

	}

	//setter

    public function setcustcode($custcode){$this->custcode=$custcode;}
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setmachine($machine){$this->machine=$machine;}
    public function setwswr($wswr){$this->wswr=$wswr;}
    public function setswrno($swrno){$this->swrno=$swrno;}
    public function setfaicat($faicat){$this->faicat=$faicat;}
    public function setpackagetype($packagetype){$this->packagetype=$packagetype;}
    public function setstripno($stripno){$this->stripno=$stripno;}
    public function setpackagethickness($packagethickness){$this->packagethickness=$packagethickness;}
    public function setpackagesize($packagesize){$this->packagesize=$packagesize;}
    public function setarraysize($arraysize){$this->arraysize=$arraysize;}
    public function setrequiredpackagethickness($requiredpackagethickness){$this->requiredpackagethickness=$requiredpackagethickness;}
    public function setactualpackagethickness($actualpackagethickness){$this->actualpackagethickness=$actualpackagethickness;}
    public function setrequiredpackageorientation($requiredpackageorientation){$this->requiredpackageorientation=$requiredpackageorientation;}
    public function setactualpackageorientation($actualpackageorientation){$this->actualpackageorientation=$actualpackageorientation;}
    public function setprocessmode($processmode){$this->processmode=$processmode;}
    public function setcutmode($cutmode){$this->cutmode=$cutmode;}
    public function setcutmethod($cutmethod){$this->cutmethod=$cutmethod;}
    public function settypeofblade($typeofblade){$this->typeofblade=$typeofblade;}
    public function setcleaningflangedone($cleaningflangedone){$this->cleaningflangedone=$cleaningflangedone;}
    public function setflangesizez1($flangesizez1){$this->flangesizez1=$flangesizez1;}
    public function setflangesizez2($flangesizez2){$this->flangesizez2=$flangesizez2;}
    public function setbladedescz1($bladedescz1){$this->bladedescz1=$bladedescz1;}
    public function setbladedescz2($bladedescz2){$this->bladedescz2=$bladedescz2;}
    public function setbladelotnoz1($bladelotnoz1){$this->bladelotnoz1=$bladelotnoz1;}
    public function setbladelotnoz2($bladelotnoz2){$this->bladelotnoz2=$bladelotnoz2;}
    public function setcuttingchannelsequence($cuttingchannelsequence){$this->cuttingchannelsequence=$cuttingchannelsequence;}
    public function setchannelthetarotation($channelthetarotation){$this->channelthetarotation=$channelthetarotation;}
    public function setindexsizech1($indexsizech1){$this->indexsizech1=$indexsizech1;}
    public function setindexsizech2($indexsizech2){$this->indexsizech2=$indexsizech2;}
    public function setbladeheightz1($bladeheightz1){$this->bladeheightz1=$bladeheightz1;}
    public function setbladeheightz2($bladeheightz2){$this->bladeheightz2=$bladeheightz2;}
    public function setbladecutlengthz1($bladecutlengthz1){$this->bladecutlengthz1=$bladecutlengthz1;}
    public function setbladecutlengthz2($bladecutlengthz2){$this->bladecutlengthz2=$bladecutlengthz2;}
    public function setspindlerevz1($spindlerevz1){$this->spindlerevz1=$spindlerevz1;}
    public function setspindlerevz2($spindlerevz2){$this->spindlerevz2=$spindlerevz2;}
    public function setfeedspeedz1($feedspeedz1){$this->feedspeedz1=$feedspeedz1;}
    public function setfeedspeedz2($feedspeedz2){$this->feedspeedz2=$feedspeedz2;}
    public function setbladecoolerz1($bladecoolerz1){$this->bladecoolerz1=$bladecoolerz1;}
    public function setbladecoolerz2($bladecoolerz2){$this->bladecoolerz2=$bladecoolerz2;}
    public function setshowerz1($showerz1){$this->showerz1=$showerz1;}
    public function setshowerz2($showerz2){$this->showerz2=$showerz2;}
    public function setsprayz1($sprayz1){$this->sprayz1=$sprayz1;}
    public function setsprayz2($sprayz2){$this->sprayz2=$sprayz2;}
    public function setdicingtapetype($dicingtapetype){$this->dicingtapetype=$dicingtapetype;}
    public function setdicingtapeused($dicingtapeused){$this->dicingtapeused=$dicingtapeused;}
    public function setdicingtapethickness($dicingtapethickness){$this->dicingtapethickness=$dicingtapethickness;}
    public function setchucktablevacuumwith($chucktablevacuumwith){$this->chucktablevacuumwith=$chucktablevacuumwith;}
    public function setchucktablevacuumwithout($chucktablevacuumwithout){$this->chucktablevacuumwithout=$chucktablevacuumwithout;}
    public function setsurfactant($surfactant){$this->surfactant=$surfactant;}
    public function setstrokerate($strokerate){$this->strokerate=$strokerate;}
    public function setstrokelength($strokelength){$this->strokelength=$strokelength;}
    public function setpurgingdone($purgingdone){$this->purgingdone=$purgingdone;}
    public function setbladeconditionchecking($bladeconditionchecking){$this->bladeconditionchecking=$bladeconditionchecking;}
    public function setcleaningbbdsensor($cleaningbbdsensor){$this->cleaningbbdsensor=$cleaningbbdsensor;}
    public function setreadingz1close($readingz1close){$this->readingz1close=$readingz1close;}
    public function setreadingz2close($readingz2close){$this->readingz2close=$readingz2close;}
    public function setreadingz1open($readingz1open){$this->readingz1open=$readingz1open;}
    public function setreadingz2open($readingz2open){$this->readingz2open=$readingz2open;}
    public function setcleaningwheelmountdone($cleaningwheelmountdone){$this->cleaningwheelmountdone=$cleaningwheelmountdone;}
    public function setbladesetupdone($bladesetupdone){$this->bladesetupdone=$bladesetupdone;}
    public function setcleaningchucktabledone($cleaningchucktabledone){$this->cleaningchucktabledone=$cleaningchucktabledone;}
    public function setcleaningncssensordone($cleaningncssensordone){$this->cleaningncssensordone=$cleaningncssensordone;}
    public function setreadingncs1($readingncs1){$this->readingncs1=$readingncs1;}
    public function setreadingncs2($readingncs2){$this->readingncs2=$readingncs2;}
    public function setcleaningspinnertabledone($cleaningspinnertabledone){$this->cleaningspinnertabledone=$cleaningspinnertabledone;}
    public function setdryparamtime($dryparamtime){$this->dryparamtime=$dryparamtime;}
    public function setdryparamrpm($dryparamrpm){$this->dryparamrpm=$dryparamrpm;}
    public function setatomizingcleanairpressure($atomizingcleanairpressure){$this->atomizingcleanairpressure=$atomizingcleanairpressure;}
    public function setspinnertablewith($spinnertablewith){$this->spinnertablewith=$spinnertablewith;}
    public function setspinnertablewithout($spinnertablewithout){$this->spinnertablewithout=$spinnertablewithout;}
    public function setdiwatertemp($diwatertemp){$this->diwatertemp=$diwatertemp;}
    public function setdiwaterpressure($diwaterpressure){$this->diwaterpressure=$diwaterpressure;}
    public function setdiwaterresistivity($diwaterresistivity){$this->diwaterresistivity=$diwaterresistivity;}
    public function setcutcenteredoncutline($cutcenteredoncutline){$this->cutcenteredoncutline=$cutcenteredoncutline;}
    public function sethairlinecutpositionadjust($hairlinecutpositionadjust){$this->hairlinecutpositionadjust=$hairlinecutpositionadjust;}
    public function setpriorcutting($priorcutting){$this->priorcutting=$priorcutting;}
    public function setduringcutting($duringcutting){$this->duringcutting=$duringcutting;}
    public function setpackagedimensionrecordedspc($packagedimensionrecordedspc){$this->packagedimensionrecordedspc=$packagedimensionrecordedspc;}
    public function setvifirstpanel($vifirstpanel){$this->vifirstpanel=$vifirstpanel;}
    public function setpanelnoinspected($panelnoinspected){$this->panelnoinspected=$panelnoinspected;}
    public function settechemp($techemp){$this->techemp=$techemp;}
    public function setqcemp($qcemp){$this->qcemp=$qcemp;}
    public function setremarks($remarks){$this->remarks=$remarks;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}
    public function setbladeexposurez1($bladeexposurez1){$this->bladeexposurez1=$bladeexposurez1;}
    public function setbladeexposurez2($bladeexposurez2){$this->bladeexposurez2=$bladeexposurez2;}



	//Getter

    public function getcustcode(){return $this->custcode;}
    public function getintlot(){return $this->intlot;}
    public function getmachine(){return $this->machine;}
    public function getwswr(){return $this->wswr;}
    public function getswrno(){return $this->swrno;}
    public function getfaicat(){return $this->faicat;}
    public function getpackagetype(){return $this->packagetype;}
    public function getstripno(){return $this->stripno;}
    public function getpackagethickness(){return $this->packagethickness;}
    public function getpackagesize(){return $this->packagesize;}
    public function getarraysize(){return $this->arraysize;}
    public function getrequiredpackagethickness(){return $this->requiredpackagethickness;}
    public function getactualpackagethickness(){return $this->actualpackagethickness;}
    public function getrequiredpackageorientation(){return $this->requiredpackageorientation;}
    public function getactualpackageorientation(){return $this->actualpackageorientation;}
    public function getprocessmode(){return $this->processmode;}
    public function getcutmode(){return $this->cutmode;}
    public function getcutmethod(){return $this->cutmethod;}
    public function gettypeofblade(){return $this->typeofblade;}
    public function getcleaningflangedone(){return $this->cleaningflangedone;}
    public function getflangesizez1(){return $this->flangesizez1;}
    public function getflangesizez2(){return $this->flangesizez2;}
    public function getbladedescz1(){return $this->bladedescz1;}
    public function getbladedescz2(){return $this->bladedescz2;}
    public function getbladelotnoz1(){return $this->bladelotnoz1;}
    public function getbladelotnoz2(){return $this->bladelotnoz2;}
    public function getcuttingchannelsequence(){return $this->cuttingchannelsequence;}
    public function getchannelthetarotation(){return $this->channelthetarotation;}
    public function getindexsizech1(){return $this->indexsizech1;}
    public function getindexsizech2(){return $this->indexsizech2;}
    public function getbladeheightz1(){return $this->bladeheightz1;}
    public function getbladeheightz2(){return $this->bladeheightz2;}
    public function getbladecutlengthz1(){return $this->bladecutlengthz1;}
    public function getbladecutlengthz2(){return $this->bladecutlengthz2;}
    public function getspindlerevz1(){return $this->spindlerevz1;}
    public function getspindlerevz2(){return $this->spindlerevz2;}
    public function getfeedspeedz1(){return $this->feedspeedz1;}
    public function getfeedspeedz2(){return $this->feedspeedz2;}
    public function getbladecoolerz1(){return $this->bladecoolerz1;}
    public function getbladecoolerz2(){return $this->bladecoolerz2;}
    public function getshowerz1(){return $this->showerz1;}
    public function getshowerz2(){return $this->showerz2;}
    public function getsprayz1(){return $this->sprayz1;}
    public function getsprayz2(){return $this->sprayz2;}
    public function getdicingtapetype(){return $this->dicingtapetype;}
    public function getdicingtapeused(){return $this->dicingtapeused;}
    public function getdicingtapethickness(){return $this->dicingtapethickness;}
    public function getchucktablevacuumwith(){return $this->chucktablevacuumwith;}
    public function getchucktablevacuumwithout(){return $this->chucktablevacuumwithout;}
    public function getsurfactant(){return $this->surfactant;}
    public function getstrokerate(){return $this->strokerate;}
    public function getstrokelength(){return $this->strokelength;}
    public function getpurgingdone(){return $this->purgingdone;}
    public function getbladeconditionchecking(){return $this->bladeconditionchecking;}
    public function getcleaningbbdsensor(){return $this->cleaningbbdsensor;}
    public function getreadingz1close(){return $this->readingz1close;}
    public function getreadingz2close(){return $this->readingz2close;}
    public function getreadingz1open(){return $this->readingz1open;}
    public function getreadingz2open(){return $this->readingz2open;}
    public function getcleaningwheelmountdone(){return $this->cleaningwheelmountdone;}
    public function getbladesetupdone(){return $this->bladesetupdone;}
    public function getcleaningchucktabledone(){return $this->cleaningchucktabledone;}
    public function getcleaningncssensordone(){return $this->cleaningncssensordone;}
    public function getreadingncs1(){return $this->readingncs1;}
    public function getreadingncs2(){return $this->readingncs2;}
    public function getcleaningspinnertabledone(){return $this->cleaningspinnertabledone;}
    public function getdryparamtime(){return $this->dryparamtime;}
    public function getdryparamrpm(){return $this->dryparamrpm;}
    public function getatomizingcleanairpressure(){return $this->atomizingcleanairpressure;}
    public function getspinnertablewith(){return $this->spinnertablewith;}
    public function getspinnertablewithout(){return $this->spinnertablewithout;}
    public function getdiwatertemp(){return $this->diwatertemp;}
    public function getdiwaterpressure(){return $this->diwaterpressure;}
    public function getdiwaterresistivity(){return $this->diwaterresistivity;}
    public function getcutcenteredoncutline(){return $this->cutcenteredoncutline;}
    public function gethairlinecutpositionadjust(){return $this->hairlinecutpositionadjust;}
    public function getpriorcutting(){return $this->priorcutting;}
    public function getduringcutting(){return $this->duringcutting;}
    public function getpackagedimensionrecordedspc(){return $this->packagedimensionrecordedspc;}
    public function getvifirstpanel(){return $this->vifirstpanel;}
    public function getpanelnoinspected(){return $this->panelnoinspected;}
    public function gettechemp(){return $this->techemp;}
    public function getqcemp(){return $this->qcemp;}
    public function getremarks(){return $this->remarks;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}
    public function getbladeexposurez1(){return $this->bladeexposurez1;}
    public function getbladeexposurez2(){return $this->bladeexposurez2;}



    public function AddeFAI015(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai015 (custcode,
            intlot,
            machine,
            wswr,
            swrno,
            faicat,
            packagetype,
            stripno,
            packagethickness,
            packagesize,
            arraysize,
            requiredpackagethickness,
            actualpackagethickness,
            requiredpackageorientation,
            actualpackageorientation,
            processmode,
            cutmode,
            cutmethod,
            typeofblade,
            cleaningflangedone,
            flangesizez1,
            flangesizez2,
            bladedescz1,
            bladedescz2,
            bladelotnoz1,
            bladelotnoz2,
            cuttingchannelsequence,
            channelthetarotation,
            indexsizech1,
            indexsizech2,
            bladeheightz1,
            bladeheightz2,
            bladeexposurez1,
            bladeexposurez2,
            bladecutlengthz1,
            bladecutlengthz2,
            spindlerevz1,
            spindlerevz2,
            feedspeedz1,
            feedspeedz2,
            bladecoolerz1,
            bladecoolerz2,
            showerz1,
            showerz2,
            sprayz1,
            sprayz2,
            dicingtapetype,
            dicingtapeused,
            dicingtapethickness,
            chucktablevacuumwith,
            chucktablevacuumwithout,
            surfactant,
            strokerate,
            strokelength,
            purgingdone,
            bladeconditionchecking,
            cleaningbbdsensor,
            readingz1close,
            readingz2close,
            readingz1open,
            readingz2open,
            cleaningwheelmountdone,
            bladesetupdone,
            cleaningchucktabledone,
            cleaningncssensordone,
            readingncs1,
            readingncs2,
            cleaningspinnertabledone,
            dryparamtime,
            dryparamrpm,
            atomizingcleanairpressure,
            spinnertablewith,
            spinnertablewithout,
            diwatertemp,
            diwaterpressure,
            diwaterresistivity,
            cutcenteredoncutline,
            hairlinecutpositionadjust,
            priorcutting,
            duringcutting,
            packagedimensionrecordedspc,
            vifirstpanel,
            panelnoinspected,
            techemp,
            qcemp,
            remarks,
            lastupdate,
            lastupdatedby,
            active) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),
            $this->getintlot(),
            $this->getmachine(),
            $this->getwswr(),
            $this->getswrno(),
            $this->getfaicat(),
            $this->getpackagetype(),
            $this->getstripno(),
            $this->getpackagethickness(),
            $this->getpackagesize(),
            $this->getarraysize(),
            $this->getrequiredpackagethickness(),
            $this->getactualpackagethickness(),
            $this->getrequiredpackageorientation(),
            $this->getactualpackageorientation(),
            $this->getprocessmode(),
            $this->getcutmode(),
            $this->getcutmethod(),
            $this->gettypeofblade(),
            $this->getcleaningflangedone(),
            $this->getflangesizez1(),
            $this->getflangesizez2(),
            $this->getbladedescz1(),
            $this->getbladedescz2(),
            $this->getbladelotnoz1(),
            $this->getbladelotnoz2(),
            $this->getcuttingchannelsequence(),
            $this->getchannelthetarotation(),
            $this->getindexsizech1(),
            $this->getindexsizech2(),
            $this->getbladeheightz1(),
            $this->getbladeheightz2(),
            $this->getbladeexposurez1(),
            $this->getbladeexposurez2(),
            $this->getbladecutlengthz1(),
            $this->getbladecutlengthz2(),
            $this->getspindlerevz1(),
            $this->getspindlerevz2(),
            $this->getfeedspeedz1(),
            $this->getfeedspeedz2(),
            $this->getbladecoolerz1(),
            $this->getbladecoolerz2(),
            $this->getshowerz1(),
            $this->getshowerz2(),
            $this->getsprayz1(),
            $this->getsprayz2(),
            $this->getdicingtapetype(),
            $this->getdicingtapeused(),
            $this->getdicingtapethickness(),
            $this->getchucktablevacuumwith(),
            $this->getchucktablevacuumwithout(),
            $this->getsurfactant(),
            $this->getstrokerate(),
            $this->getstrokelength(),
            $this->getpurgingdone(),
            $this->getbladeconditionchecking(),
            $this->getcleaningbbdsensor(),
            $this->getreadingz1close(),
            $this->getreadingz2close(),
            $this->getreadingz1open(),
            $this->getreadingz2open(),
            $this->getcleaningwheelmountdone(),
            $this->getbladesetupdone(),
            $this->getcleaningchucktabledone(),
            $this->getcleaningncssensordone(),
            $this->getreadingncs1(),
            $this->getreadingncs2(),
            $this->getcleaningspinnertabledone(),
            $this->getdryparamtime(),
            $this->getdryparamrpm(),
            $this->getatomizingcleanairpressure(),
            $this->getspinnertablewith(),
            $this->getspinnertablewithout(),
            $this->getdiwatertemp(),
            $this->getdiwaterpressure(),
            $this->getdiwaterresistivity(),
            $this->getcutcenteredoncutline(),
            $this->gethairlinecutpositionadjust(),
            $this->getpriorcutting(),
            $this->getduringcutting(),
            $this->getpackagedimensionrecordedspc(),
            $this->getvifirstpanel(),
            $this->getpanelnoinspected(),
            $this->gettechemp(),
            $this->getqcemp(),
            $this->getremarks(),
            $this->getlastupdate(),
            $this->getlastupdatedby(),
            $this->getactive());
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

}

?>