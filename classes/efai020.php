<?php
include_once("connection.php");

class efai020 {

    private $custcode;
    private $intlot;
    private $wswr;
    private $swrno;
    private $packagetype;
    private $stripno;
    private $packagethickness;
    private $packagesize;
    private $arraysize;
    private $lotrequiringmanualdepanelling;
    private $remnantsrejectunitsbeenremoved;
    private $goodunitsbeenscrapedfromdicingtape;
    private $canisterfilledwithfoam;
    private $canisterproperlyenclosedwithlid;
    private $packinglotdetailsattached;
    private $lotproperlyvacuumsealed;
    private $vacuumsealerpressure;
    private $qcremnantsrejectunitsbeenremoved;
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
    public function setwswr($wswr){$this->wswr=$wswr;}
    public function setswrno($swrno){$this->swrno=$swrno;}
    public function setpackagetype($packagetype){$this->packagetype=$packagetype;}
    public function setstripno($stripno){$this->stripno=$stripno;}
    public function setpackagethickness($packagethickness){$this->packagethickness=$packagethickness;}
    public function setpackagesize($packagesize){$this->packagesize=$packagesize;}
    public function setarraysize($arraysize){$this->arraysize=$arraysize;}
    public function setlotrequiringmanualdepanelling($lotrequiringmanualdepanelling){$this->lotrequiringmanualdepanelling=$lotrequiringmanualdepanelling;}
    public function setremnantsrejectunitsbeenremoved($remnantsrejectunitsbeenremoved){$this->remnantsrejectunitsbeenremoved=$remnantsrejectunitsbeenremoved;}
    public function setgoodunitsbeenscrapedfromdicingtape($goodunitsbeenscrapedfromdicingtape){$this->goodunitsbeenscrapedfromdicingtape=$goodunitsbeenscrapedfromdicingtape;}
    public function setcanisterfilledwithfoam($canisterfilledwithfoam){$this->canisterfilledwithfoam=$canisterfilledwithfoam;}
    public function setcanisterproperlyenclosedwithlid($canisterproperlyenclosedwithlid){$this->canisterproperlyenclosedwithlid=$canisterproperlyenclosedwithlid;}
    public function setpackinglotdetailsattached($packinglotdetailsattached){$this->packinglotdetailsattached=$packinglotdetailsattached;}
    public function setlotproperlyvacuumsealed($lotproperlyvacuumsealed){$this->lotproperlyvacuumsealed=$lotproperlyvacuumsealed;}
    public function setvacuumsealerpressure($vacuumsealerpressure){$this->vacuumsealerpressure=$vacuumsealerpressure;}
    public function setqcremnantsrejectunitsbeenremoved($qcremnantsrejectunitsbeenremoved){$this->qcremnantsrejectunitsbeenremoved=$qcremnantsrejectunitsbeenremoved;}
    public function setqcemp($qcemp){$this->qcemp=$qcemp;}
    public function setremarks($remarks){$this->remarks=$remarks;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function getcustcode(){return $this->custcode;}
    public function getintlot(){return $this->intlot;}
    public function getwswr(){return $this->wswr;}
    public function getswrno(){return $this->swrno;}
    public function getpackagetype(){return $this->packagetype;}
    public function getstripno(){return $this->stripno;}
    public function getpackagethickness(){return $this->packagethickness;}
    public function getpackagesize(){return $this->packagesize;}
    public function getarraysize(){return $this->arraysize;}
    public function getlotrequiringmanualdepanelling(){return $this->lotrequiringmanualdepanelling;}
    public function getremnantsrejectunitsbeenremoved(){return $this->remnantsrejectunitsbeenremoved;}
    public function getgoodunitsbeenscrapedfromdicingtape(){return $this->goodunitsbeenscrapedfromdicingtape;}
    public function getcanisterfilledwithfoam(){return $this->canisterfilledwithfoam;}
    public function getcanisterproperlyenclosedwithlid(){return $this->canisterproperlyenclosedwithlid;}
    public function getpackinglotdetailsattached(){return $this->packinglotdetailsattached;}
    public function getlotproperlyvacuumsealed(){return $this->lotproperlyvacuumsealed;}
    public function getvacuumsealerpressure(){return $this->vacuumsealerpressure;}
    public function getqcremnantsrejectunitsbeenremoved(){return $this->qcremnantsrejectunitsbeenremoved;}
    public function getqcemp(){return $this->qcemp;}
    public function getremarks(){return $this->remarks;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}



    public function AddeFAI020(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai020 (custcode,
            intlot,
            wswr,
            swrno,
            packagetype,
            stripno,
            packagethickness,
            packagesize,
            arraysize,
            lotrequiringmanualdepanelling,
            remnantsrejectunitsbeenremoved,
            goodunitsbeenscrapedfromdicingtape,
            canisterfilledwithfoam,
            canisterproperlyenclosedwithlid,
            packinglotdetailsattached,
            lotproperlyvacuumsealed,
            qcremnantsrejectunitsbeenremoved,
            qcemp,
            remarks,
            lastupdate,
            lastupdatedby,
            active,vacuumsealerpressure) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),
            $this->getintlot(),
            $this->getwswr(),
            $this->getswrno(),
            $this->getpackagetype(),
            $this->getstripno(),
            $this->getpackagethickness(),
            $this->getpackagesize(),
            $this->getarraysize(),
            $this->getlotrequiringmanualdepanelling(),
            $this->getremnantsrejectunitsbeenremoved(),
            $this->getgoodunitsbeenscrapedfromdicingtape(),
            $this->getcanisterfilledwithfoam(),
            $this->getcanisterproperlyenclosedwithlid(),
            $this->getpackinglotdetailsattached(),
            $this->getlotproperlyvacuumsealed(),
            $this->getqcremnantsrejectunitsbeenremoved(),
            $this->getqcemp(),
            $this->getremarks(),
            $this->getlastupdate(),
            $this->getlastupdatedby(),
            $this->getactive(),
            $this->getvacuumsealerpressure());
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