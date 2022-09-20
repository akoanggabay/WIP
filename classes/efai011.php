<?php
include_once("connection.php");

class efai011 {
    private $custcode;
	private $intlot;
    private $wswr;
    private $swrno;
    private $wafertype;
	private $samplingplan;
    private $samplingsize;
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

    public function setwafertype($wafertype)
	{
		$this->wafertype = $wafertype;
	}

    public function setsamplingplan($samplingplan)
	{
		$this->samplingplan = $samplingplan;
	}

    public function setsamplingsize($samplingsize)
	{
		$this->samplingsize = $samplingsize;
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

    public function getwafertype()
	{
		return $this->wafertype;
	}

    public function getsamplingplan()
	{
		return $this->samplingplan;
	}

    public function getsamplingsize()
	{
		return $this->samplingsize;
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

    public function AddeFAI011(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai011 (custcode,intlot,wswr,swrno,wafertype,samplingplan,samplingsize,remarks,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->getwafertype(),$this->getsamplingplan(),$this->getsamplingsize(),$this->getremarks(),date("Y-m-d H:i:sa"),$this->getlastupdatedby(),1);
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