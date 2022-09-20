<?php
include_once("connection.php");

class efai009 {
    private $custcode;
	private $intlot;
    private $wswr;
    private $swrno;
    private $loaderplateclean;
	private $uvirradtime;
    private $bustedlamp;
    private $lamphourusage;
    private $requireduvdosage;
    private $actualuvdosage;
    private $wafernouvcuring;
    private $reasonuvcuring;
    private $techemp;
    private $qcemp;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
    private $machine;
    private $faicat;
	

	function __construct(){

	}

	//setter

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setintlot($intlot)
	{
		$this->intlot = $intlot;
	}

    public function setwswr($wswr)
	{
		$this->wswr = $wswr;
	}

    public function setswrno($swrno)
	{
		$this->swrno = $swrno;
	}

    public function setloaderplateclean($loaderplateclean)
	{
		$this->loaderplateclean = $loaderplateclean;
	}

    public function setuvirradtime($uvirradtime)
	{
		$this->uvirradtime = $uvirradtime;
	}

    public function setbustedlamp($bustedlamp)
	{
		$this->bustedlamp = $bustedlamp;
	}

    public function setlamphourusage($lamphourusage)
	{
		$this->lamphourusage = $lamphourusage;
	}

    public function setrequireduvdosage($requireduvdosage)
	{
		$this->requireduvdosage = $requireduvdosage;
	}

    public function setactualuvdosage($actualuvdosage)
	{
		$this->actualuvdosage = $actualuvdosage;
	}

    public function setwafernouvcuring($wafernouvcuring)
	{
		$this->wafernouvcuring = $wafernouvcuring;
	}

    public function setreasonuvcuring($reasonuvcuring)
	{
		$this->reasonuvcuring = $reasonuvcuring;
	}

    public function settechemp($techemp)
	{
		$this->techemp = $techemp;
	}

    public function setqcemp($qcemp)
	{
		$this->qcemp = $qcemp;
	}

    public function setremarks($remarks)
	{
		$this->remarks = $remarks;
	}

    public function setlastupdate($lastupdate)
	{
		$this->lastupdate = $lastupdate;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}

    public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}

    public function setmachine($machine)
	{
		$this->machine = $machine;
	}

    public function setfaicat($faicat)
	{
		$this->faicat = $faicat;
	}

	
	

	//Getter

    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getintlot()
	{
		return $this->intlot;
	}

    public function getwswr()
	{
		return $this->wswr;
	}

    public function getswrno()
	{
		return $this->swrno;
	}

    public function getloaderplateclean()
	{
		return $this->loaderplateclean;
	}

    public function getuvirradtime()
	{
		return $this->uvirradtime;
	}

    public function getbustedlamp()
	{
		return $this->bustedlamp;
	}

    public function getlamphourusage()
	{
		return $this->lamphourusage;
	}

    public function getrequireduvdosage()
	{
		return $this->requireduvdosage;
	}

    public function getactualuvdosage()
	{
		return $this->actualuvdosage;
	}

    public function getwafernouvcuring()
	{
		return $this->wafernouvcuring;
	}

    public function getreasonuvcuring()
	{
		return $this->reasonuvcuring;
	}

    public function gettechemp()
	{
		return $this->techemp;
	}

    public function getqcemp()
	{
		return $this->qcemp;
	}

    public function getremarks()
	{
		return $this->remarks;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

    public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}

    public function getactive()
	{
		return $this->active;
	}

    public function getmachine()
	{
		return $this->machine;
	}

    public function getfaicat()
	{
		return $this->faicat;
	}

    public function AddeFAI009(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai009 (custcode,intlot,wswr,swrno,loaderplateclean,uvirradtime,bustedlamp,lamphourusage,requireduvdosage,actualuvdosage,wafernouvcuring,reasonuvcuring,techemp,qcemp,remarks,lastupdate,lastupdatedby,active,machine,faicat) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->getloaderplateclean(),$this->getuvirradtime(),$this->getbustedlamp(),$this->getlamphourusage(),$this->getrequireduvdosage(),$this->getactualuvdosage(),$this->getwafernouvcuring(),$this->getreasonuvcuring(),$this->gettechemp(),$this->getqcemp(),$this->getremarks(),date("Y-m-d H:i:s"),$this->getlastupdatedby(),1,$this->getmachine(),$this->getfaicat());
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