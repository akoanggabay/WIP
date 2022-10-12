<?php
include_once("connection.php");

class efai012 {
    private $custcode;
	private $intlot;
    private $wswr;
    private $swrno;
	private $wafersize;
    private $tally;
    private $qtyouttally;
    private $detailsattached;
    private $canisterused;
    private $canisternoused;
    private $properlyvacuum;
	private $totalnoofringsused;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
	


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

	public function setwafersize($wafersize)
	{
		$this->wafersize = $wafersize;
	}

    public function settally($tally)
	{
		$this->tally = $tally;
	}

    public function setqtyouttally($qtyouttally)
	{
		$this->qtyouttally = $qtyouttally;
	}

    public function setdetailsattached($detailsattached)
	{
		$this->detailsattached = $detailsattached;
	}

    public function setcanisterused($canisterused)
	{
		$this->canisterused = $canisterused;
	}

    public function setcanisternoused($canisternoused)
	{
		$this->canisternoused = $canisternoused;
	}

    public function setproperlyvacuum($properlyvacuum)
	{
		$this->properlyvacuum = $properlyvacuum;
	}

	public function settotalnoofringsused($totalnoofringsused)
	{
		$this->totalnoofringsused = $totalnoofringsused;
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

	public function getwafersize()
	{
		return $this->wafersize;
	}

    public function gettally()
	{
		return $this->tally;
	}

    public function getqtyouttally()
	{
		return $this->qtyouttally;
	}

    public function getdetailsattached()
	{
		return $this->detailsattached;
	}

    public function getcanisterused()
	{
		return $this->canisterused;
	}

    public function getcanisternoused()
	{
		return $this->canisternoused;
	}

    public function getproperlyvacuum()
	{
		return $this->properlyvacuum;
	}

	public function gettotalnoofringsused()
	{
		return $this->totalnoofringsused;
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

    public function AddeFAI012(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai012 (custcode,intlot,wswr,swrno,tally,qtyouttally,detailsattached,canisterused,canisternoused,properlyvacuum,totalnoofringsused,remarks,lastupdate,lastupdatedby,active,wafersize) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->gettally(),$this->getqtyouttally(),$this->getdetailsattached(),$this->getcanisterused(),$this->getcanisternoused(),$this->getproperlyvacuum(),$this->gettotalnoofringsused(),$this->getremarks(),date("Y-m-d H:i:s"),$this->getlastupdatedby(),1,$this->getwafersize());
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