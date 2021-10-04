<?php
include_once("connection.php");

class RejectLogs {
    private $id;
    private $trackingno;
    private $waferno;
    private $ddetails;
    private $dqty;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
	


	function __construct(){

	}

	//setter

    public function setid($id)
	{
		$this->id = $id;
	}

    public function settrackingno($trackingno)
	{
		$this->trackingno = $trackingno;
	}

    public function setwaferno($waferno)
	{
		$this->waferno = $waferno;
	}

    public function setddetails($ddetails)
	{
		$this->ddetails = $ddetails;
	}

    public function setdqty($dqty)
	{
		$this->dqty = $dqty;
	}

    public function setremarks($remarks)
	{
		$this->remarks = $remarks;
	}

    public function setlastupdate($lastupdate)
	{
		$this->lastupdate = $lastupdate;
	}

	public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}
	

	//Getter

    public function getid()
	{
		return $this->id;
	}

    public function gettrackingno()
	{
		return $this->trackingno;
	}

    public function getwaferno()
	{
		return $this->waferno;
	}

    public function getddetails()
	{
		return $this->ddetails;
	}

    public function getdqty()
	{
		return $this->dqty;
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



    public function AddRejectLogs(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.rejectlogs (trackingno,waferno,ddetails,dqty,remarks,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?)";
            $params = array($this->gettrackingno(),$this->getwaferno(),$this->getddetails(),$this->getdqty(),$this->getremarks(),$this->getlastupdate(),$this->getlastupdatedby());
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