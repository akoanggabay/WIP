<?php
include_once("connection.php");

class efai018 {


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
    private $panelundergo100inspection;
    private $remnantsrejectunitsbeenremoved;
    private $canisterplacedunderdepanellingguide;
    private $formcushiondiskplacedinside;
    private $goodunitsbeenscrapedfromdicingtape;
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
    public function setpanelundergo100inspection($panelundergo100inspection){$this->panelundergo100inspection=$panelundergo100inspection;}
    public function setremnantsrejectunitsbeenremoved($remnantsrejectunitsbeenremoved){$this->remnantsrejectunitsbeenremoved=$remnantsrejectunitsbeenremoved;}
    public function setcanisterplacedunderdepanellingguide($canisterplacedunderdepanellingguide){$this->canisterplacedunderdepanellingguide=$canisterplacedunderdepanellingguide;}
    public function setfoamcushiondiskplacedinside($foamcushiondiskplacedinside){$this->foamcushiondiskplacedinside=$foamcushiondiskplacedinside;}
    public function setgoodunitsbeenscrapedfromdicingtape($goodunitsbeenscrapedfromdicingtape){$this->goodunitsbeenscrapedfromdicingtape=$goodunitsbeenscrapedfromdicingtape;}
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
    public function getpanelundergo100inspection(){return $this->panelundergo100inspection;}
    public function getremnantsrejectunitsbeenremoved(){return $this->remnantsrejectunitsbeenremoved;}
    public function getcanisterplacedunderdepanellingguide(){return $this->canisterplacedunderdepanellingguide;}
    public function getfoamcushiondiskplacedinside(){return $this->foamcushiondiskplacedinside;}
    public function getgoodunitsbeenscrapedfromdicingtape(){return $this->goodunitsbeenscrapedfromdicingtape;}
    public function getqcremnantsrejectunitsbeenremoved(){return $this->qcremnantsrejectunitsbeenremoved;}
    public function getqcemp(){return $this->qcemp;}
    public function getremarks(){return $this->remarks;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddeFAI018(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai018 (custcode,
            intlot,
            wswr,
            swrno,
            packagetype,
            stripno,
            packagethickness,
            packagesize,
            arraysize,
            lotrequiringmanualdepanelling,
            panelundergo100inspection,
            remnantsrejectunitsbeenremoved,
            canisterplacedunderdepanellingguide,
            foamcushiondiskplacedinside,
            goodunitsbeenscrapedfromdicingtape,
            qcremnantsrejectunitsbeenremoved,
            qcemp,
            remarks,
            lastupdate,
            lastupdatedby,
            active) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
            $this->getpanelundergo100inspection(),
            $this->getremnantsrejectunitsbeenremoved(),
            $this->getcanisterplacedunderdepanellingguide(),
            $this->getfoamcushiondiskplacedinside(),
            $this->getgoodunitsbeenscrapedfromdicingtape(),
            $this->getqcremnantsrejectunitsbeenremoved(),
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