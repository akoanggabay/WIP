<?php
include_once("connection.php");

class efai014 {

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
    private $requiredmountingorientation;
    private $actualmountingorientation;
    private $processmode;
    private $tablevacuumpressure;
    private $ringframesizesetup;
    private $tablesizesetup;
    private $cutterbladepositionsetup;
    private $changeincutterblade;
    private $bladecount;
    private $chuckplateclean;
    private $dicingtapechange;
    private $dicingtapetype;
    private $dicingtapeused;
    private $dicingtapelotno;
    private $dicingtapeexp;
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
    public function setrequiredmountingorientation($requiredmountingorientation){$this->requiredmountingorientation=$requiredmountingorientation;}
    public function setactualmountingorientation($actualmountingorientation){$this->actualmountingorientation=$actualmountingorientation;}
    public function setprocessmode($processmode){$this->processmode=$processmode;}
    public function settablevacuumpressure($tablevacuumpressure){$this->tablevacuumpressure=$tablevacuumpressure;}
    public function setringframesizesetup($ringframesizesetup){$this->ringframesizesetup=$ringframesizesetup;}
    public function settablesizesetup($tablesizesetup){$this->tablesizesetup=$tablesizesetup;}
    public function setcutterbladepositionsetup($cutterbladepositionsetup){$this->cutterbladepositionsetup=$cutterbladepositionsetup;}
    public function setchangeincutterblade($changeincutterblade){$this->changeincutterblade=$changeincutterblade;}
    public function setbladecount($bladecount){$this->bladecount=$bladecount;}
    public function setchuckplateclean($chuckplateclean){$this->chuckplateclean=$chuckplateclean;}
    public function setdicingtapechange($dicingtapechange){$this->dicingtapechange=$dicingtapechange;}
    public function setdicingtapetype($dicingtapetype){$this->dicingtapetype=$dicingtapetype;}
    public function setdicingtapeused($dicingtapeused){$this->dicingtapeused=$dicingtapeused;}
    public function setdicingtapelotno($dicingtapelotno){$this->dicingtapelotno=$dicingtapelotno;}
    public function setdicingtapeexp($dicingtapeexp){$this->dicingtapeexp=$dicingtapeexp;}
    public function settechemp($techemp){$this->techemp=$techemp;}
    public function setqcemp($qcemp){$this->qcemp=$qcemp;}
    public function setremarks($remarks){$this->remarks=$remarks;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


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
    public function getrequiredmountingorientation(){return $this->requiredmountingorientation;}
    public function getactualmountingorientation(){return $this->actualmountingorientation;}
    public function getprocessmode(){return $this->processmode;}
    public function gettablevacuumpressure(){return $this->tablevacuumpressure;}
    public function getringframesizesetup(){return $this->ringframesizesetup;}
    public function gettablesizesetup(){return $this->tablesizesetup;}
    public function getcutterbladepositionsetup(){return $this->cutterbladepositionsetup;}
    public function getchangeincutterblade(){return $this->changeincutterblade;}
    public function getbladecount(){return $this->bladecount;}
    public function getchuckplateclean(){return $this->chuckplateclean;}
    public function getdicingtapechange(){return $this->dicingtapechange;}
    public function getdicingtapetype(){return $this->dicingtapetype;}
    public function getdicingtapeused(){return $this->dicingtapeused;}
    public function getdicingtapelotno(){return $this->dicingtapelotno;}
    public function getdicingtapeexp(){return $this->dicingtapeexp;}
    public function gettechemp(){return $this->techemp;}
    public function getqcemp(){return $this->qcemp;}
    public function getremarks(){return $this->remarks;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}



    public function AddeFAI014(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai014 (custcode,intlot,machine,wswr,swrno,faicat,packagetype,stripno,packagethickness,packagesize,arraysize,requiredpackagethickness,actualpackagethickness,
            requiredmountingorientation,actualmountingorientation,processmode,tablevacuumpressure,ringframesizesetup,tablesizesetup,cutterbladepositionsetup,changeincutterblade,bladecount,
            chuckplateclean,dicingtapechange,dicingtapetype,dicingtapeused,dicingtapelotno,dicingtapeexp,techemp,qcemp,remarks,lastupdate,lastupdatedby,
            active) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
            $this->getrequiredmountingorientation(),
            $this->getactualmountingorientation(),
            $this->getprocessmode(),
            $this->gettablevacuumpressure(),
            $this->getringframesizesetup(),
            $this->gettablesizesetup(),
            $this->getcutterbladepositionsetup(),
            $this->getchangeincutterblade(),
            $this->getbladecount(),
            $this->getchuckplateclean(),
            $this->getdicingtapechange(),
            $this->getdicingtapetype(),
            $this->getdicingtapeused(),
            $this->getdicingtapelotno(),
            $this->getdicingtapeexp(),
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