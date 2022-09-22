<?php
include_once("connection.php");

class efai007 {
    private $custcode;
	private $intlot;
	private $mounttype;
	private $machine;
	private $faicat;
	private $wswr;
	private $swrno;
	private $wafersaw;
	private $wafertype;
	private $requiredwaferthickness;
	private $actualwaferthickness;
	private $requiredwaferorientation;
	private $actualwaferorientation;
	private $processmode;
	private $chucktablechange;
	private $chuckplateclean;
	private $chucktabletype;
	private $chucktabletemp;
	private $chucktablesize;
	private $dicingtapechange;
	private $dicingtapetype;
	private $dicingtapesize;
	private $dicingtapeinstallation;
	private $dicingtapeused;
	private $dicingtapelotno;
	private $dicingtapeexp;
	private $bladechange;
	private $bladecount;
	private $bladeposition;
	private $ringframeclean;
	private $lotpreheatprocess;
	private $tabletemprequired;
	private $tabletempactual;
	private $preheatingtime;
	private $mainairpressure;
	private $setupwafer;
	private $rollerpressure;
	private $techemp;
	private $qcemp;
	private $remarks;
	private $lastupdate;
	private $lastupdatedby;
	private $active;

	


	function __construct(){

	}

	//setter
	public function setcustcode($custcode){$this->custcode=$custcode;}
	public function setintlot($intlot){$this->intlot=$intlot;}
	public function setmounttype($mounttype){$this->mounttype=$mounttype;}
	public function setmachine($machine){$this->machine=$machine;}
	public function setfaicat($faicat){$this->faicat=$faicat;}
	public function setwswr($wswr){$this->wswr=$wswr;}
	public function setswrno($swrno){$this->swrno=$swrno;}
	public function setwafersaw($wafersaw){$this->wafersaw=$wafersaw;}
	public function setwafertype($wafertype){$this->wafertype=$wafertype;}
	public function setrequiredwaferthickness($requiredwaferthickness){$this->requiredwaferthickness=$requiredwaferthickness;}
	public function setactualwaferthickness($actualwaferthickness){$this->actualwaferthickness=$actualwaferthickness;}
	public function setrequiredwaferorientation($requiredwaferorientation){$this->requiredwaferorientation=$requiredwaferorientation;}
	public function setactualwaferorientation($actualwaferorientation){$this->actualwaferorientation=$actualwaferorientation;}
	public function setprocessmode($processmode){$this->processmode=$processmode;}
	public function setchucktablechange($chucktablechange){$this->chucktablechange=$chucktablechange;}
	public function setchuckplateclean($chuckplateclean){$this->chuckplateclean=$chuckplateclean;}
	public function setchucktabletype($chucktabletype){$this->chucktabletype=$chucktabletype;}
	public function setchucktabletemp($chucktabletemp){$this->chucktabletemp=$chucktabletemp;}
	public function setchucktablesize($chucktablesize){$this->chucktablesize=$chucktablesize;}
	public function setdicingtapechange($dicingtapechange){$this->dicingtapechange=$dicingtapechange;}
	public function setdicingtapetype($dicingtapetype){$this->dicingtapetype=$dicingtapetype;}
	public function setdicingtapesize($dicingtapesize){$this->dicingtapesize=$dicingtapesize;}
	public function setdicingtapeinstallation($dicingtapeinstallation){$this->dicingtapeinstallation=$dicingtapeinstallation;}
	public function setdicingtapeused($dicingtapeused){$this->dicingtapeused=$dicingtapeused;}
	public function setdicingtapelotno($dicingtapelotno){$this->dicingtapelotno=$dicingtapelotno;}
	public function setdicingtapeexp($dicingtapeexp){$this->dicingtapeexp=$dicingtapeexp;}
	public function setbladechange($bladechange){$this->bladechange=$bladechange;}
	public function setbladecount($bladecount){$this->bladecount=$bladecount;}
	public function setbladeposition($bladeposition){$this->bladeposition=$bladeposition;}
	public function setringframeclean($ringframeclean){$this->ringframeclean=$ringframeclean;}
	public function setlotpreheatprocess($lotpreheatprocess){$this->lotpreheatprocess=$lotpreheatprocess;}
	public function settabletemprequired($tabletemprequired){$this->tabletemprequired=$tabletemprequired;}
	public function settabletempactual($tabletempactual){$this->tabletempactual=$tabletempactual;}
	public function setpreheatingtime($preheatingtime){$this->preheatingtime=$preheatingtime;}
	public function setmainairpressure($mainairpressure){$this->mainairpressure=$mainairpressure;}
	public function setsetupwafer($setupwafer){$this->setupwafer=$setupwafer;}
	public function setrollerpressure($rollerpressure){$this->rollerpressure=$rollerpressure;}
	public function settechemp($techemp){$this->techemp=$techemp;}
	public function setqcemp($qcemp){$this->qcemp=$qcemp;}
	public function setremarks($remarks){$this->remarks=$remarks;}
	public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
	public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
	public function setactive($active){$this->active=$active;}


	
	

	//Getter

	public function getcustcode(){return $this->custcode;}
	public function getintlot(){return $this->intlot;}
	public function getmounttype(){return $this->mounttype;}
	public function getmachine(){return $this->machine;}
	public function getfaicat(){return $this->faicat;}
	public function getwswr(){return $this->wswr;}
	public function getswrno(){return $this->swrno;}
	public function getwafersaw(){return $this->wafersaw;}
	public function getwafertype(){return $this->wafertype;}
	public function getrequiredwaferthickness(){return $this->requiredwaferthickness;}
	public function getactualwaferthickness(){return $this->actualwaferthickness;}
	public function getrequiredwaferorientation(){return $this->requiredwaferorientation;}
	public function getactualwaferorientation(){return $this->actualwaferorientation;}
	public function getprocessmode(){return $this->processmode;}
	public function getchucktablechange(){return $this->chucktablechange;}
	public function getchuckplateclean(){return $this->chuckplateclean;}
	public function getchucktabletype(){return $this->chucktabletype;}
	public function getchucktabletemp(){return $this->chucktabletemp;}
	public function getchucktablesize(){return $this->chucktablesize;}
	public function getdicingtapechange(){return $this->dicingtapechange;}
	public function getdicingtapetype(){return $this->dicingtapetype;}
	public function getdicingtapesize(){return $this->dicingtapesize;}
	public function getdicingtapeinstallation(){return $this->dicingtapeinstallation;}
	public function getdicingtapeused(){return $this->dicingtapeused;}
	public function getdicingtapelotno(){return $this->dicingtapelotno;}
	public function getdicingtapeexp(){return $this->dicingtapeexp;}
	public function getbladechange(){return $this->bladechange;}
	public function getbladecount(){return $this->bladecount;}
	public function getbladeposition(){return $this->bladeposition;}
	public function getringframeclean(){return $this->ringframeclean;}
	public function getlotpreheatprocess(){return $this->lotpreheatprocess;}
	public function gettabletemprequired(){return $this->tabletemprequired;}
	public function gettabletempactual(){return $this->tabletempactual;}
	public function getpreheatingtime(){return $this->preheatingtime;}
	public function getmainairpressure(){return $this->mainairpressure;}
	public function getsetupwafer(){return $this->setupwafer;}
	public function getrollerpressure(){return $this->rollerpressure;}
	public function gettechemp(){return $this->techemp;}
	public function getqcemp(){return $this->qcemp;}
	public function getremarks(){return $this->remarks;}
	public function getlastupdate(){return $this->lastupdate;}
	public function getlastupdatedby(){return $this->lastupdatedby;}
	public function getactive(){return $this->active;}


    public function AddeFAI007(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            //$sql = "INSERT INTO dbo.efai007 (custcode,intlot,mounttype,machine,faicat,wswr,swrno,wafertype,requiredwaferthickness,actualwaferthickness,requiredwaferorientation,actualwaferorientation,processmode,chucktablechange,chuckplateclean,chucktabletype,chucktabletemp,chucktablesize,dicingtapechange,dicingtapetype,dicingtapesize,dicingtapeinstallation,dicingtapeused,dicingtapelotno,dicingtapeexp,bladechange,bladecount,bladeposition,ringframeclean,lotpreheatprocess,tabletemprequired,tabletempactual,preheatingtime,mainairpressure,setupwafer,rollerpressure,techemp,qcemp,remarks,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $sql = "INSERT INTO dbo.efai007 (custcode,
			intlot,
			mounttype,
			machine,
			faicat,
			wswr,
			swrno,
			wafertype,
			requiredwaferthickness,
			actualwaferthickness,
			requiredwaferorientation,
			actualwaferorientation,
			processmode,
			chucktablechange,
			chuckplateclean,
			chucktabletype,
			chucktabletemp,
			chucktablesize,
			dicingtapechange,
			dicingtapetype,
			dicingtapesize,
			dicingtapeinstallation,
			dicingtapeused,
			dicingtapelotno,
			dicingtapeexp,
			bladechange,
			bladecount,
			bladeposition,
			ringframeclean,
			lotpreheatprocess,
			tabletemprequired,
			tabletempactual,
			preheatingtime,
			mainairpressure,
			setupwafer,
			rollerpressure,
			techemp,
			qcemp,
			remarks,
			lastupdate,
			lastupdatedby,
			active,
			wafersaw
			) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$params = array($this->getcustcode(),$this->getintlot(),$this->getmounttype(),$this->getmachine(),$this->getfaicat(),$this->getwswr(),$this->getswrno(),$this->getwafertype(),$this->getrequiredwaferthickness(),$this->getactualwaferthickness(),$this->getrequiredwaferorientation(),$this->getactualwaferorientation(),$this->getprocessmode(),$this->getchucktablechange(),$this->getchuckplateclean(),$this->getchucktabletype(),$this->getchucktabletemp(),$this->getchucktablesize(),$this->getdicingtapechange(),$this->getdicingtapetype(),$this->getdicingtapesize(),$this->getdicingtapeinstallation(),$this->getdicingtapeused(),$this->getdicingtapelotno(),$this->getdicingtapeexp(),$this->getbladechange(),$this->getbladecount(),$this->getbladeposition(),$this->getringframeclean(),$this->getlotpreheatprocess(),$this->gettabletemprequired(),$this->gettabletempactual(),$this->getpreheatingtime(),$this->getmainairpressure(),$this->getsetupwafer(),$this->getrollerpressure(),$this->gettechemp(),$this->getqcemp(),$this->getremarks(),date("Y-m-d H:i:s"),$this->getlastupdatedby(),1,$this->getwafersaw());
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
			$conn->close();
		}catch(Exception $e){
            $success = false;
			return $e;
		}
        return $success;	
	}

}

?>