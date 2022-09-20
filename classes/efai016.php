<?php
include_once("connection.php");

class efai016 {
    
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
    private $reasonuvcuring;
    private $loadingtrayclean;
    private $uvlampsfunctional;
    private $uvtapedescription;
    private $uvirradtime;
    private $ringnoundergoneuvcuring;
    private $markingperformedwithuvcuring;
    private $techemp;
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
    public function setreasonuvcuring($reasonuvcuring){$this->reasonuvcuring=$reasonuvcuring;}
    public function setloadingtrayclean($loadingtrayclean){$this->loadingtrayclean=$loadingtrayclean;}
    public function setuvlampsfunctional($uvlampsfunctional){$this->uvlampsfunctional=$uvlampsfunctional;}
    public function setuvtapedescription($uvtapedescription){$this->uvtapedescription=$uvtapedescription;}
    public function setuvirradtime($uvirradtime){$this->uvirradtime=$uvirradtime;}
    public function setringnoundergoneuvcuring($ringnoundergoneuvcuring){$this->ringnoundergoneuvcuring=$ringnoundergoneuvcuring;}
    public function setmarkingperformedwithuvcuring($markingperformedwithuvcuring){$this->markingperformedwithuvcuring=$markingperformedwithuvcuring;}
    public function settechemp($techemp){$this->techemp=$techemp;}
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
    public function getreasonuvcuring(){return $this->reasonuvcuring;}
    public function getloadingtrayclean(){return $this->loadingtrayclean;}
    public function getuvlampsfunctional(){return $this->uvlampsfunctional;}
    public function getuvtapedescription(){return $this->uvtapedescription;}
    public function getuvirradtime(){return $this->uvirradtime;}
    public function getringnoundergoneuvcuring(){return $this->ringnoundergoneuvcuring;}
    public function getmarkingperformedwithuvcuring(){return $this->markingperformedwithuvcuring;}
    public function gettechemp(){return $this->techemp;}
    public function getremarks(){return $this->remarks;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddeFAI016(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai016 (custcode,
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
            reasonuvcuring,
            loadingtrayclean,
            uvlampsfunctional,
            uvtapedescription,
            uvirradtime,
            ringnoundergoneuvcuring,
            markingperformedwithuvcuring,
            techemp,
            remarks,
            lastupdate,
            lastupdatedby,
            active) VALUES(?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?)";
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
            $this->getreasonuvcuring(),
            $this->getloadingtrayclean(),
            $this->getuvlampsfunctional(),
            $this->getuvtapedescription(),
            $this->getuvirradtime(),
            $this->getringnoundergoneuvcuring(),
            $this->getmarkingperformedwithuvcuring(),
            $this->gettechemp(),
            $this->getremarks(),
            date("Y-m-d H:i:s"),
            $this->getlastupdatedby(),
            1);
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