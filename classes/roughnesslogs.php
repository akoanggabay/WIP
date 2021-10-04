<?php
include_once("connection.php");

class RoughnessLogs {
    private $id;
	private $trackingno;
	private $r1;
    private $r2;
    private $r3;
    private $r4;
    private $r5;
    private $rave;
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

    public function setr1($r1)
	{
		$this->r1 = $r1;
	}

    public function setr2($r2)
	{
		$this->r2 = $r2;
	}

    public function setr3($r3)
	{
		$this->r3 = $r3;
	}

    public function setr4($r4)
	{
		$this->r4 = $r4;
	}

    public function setr5($r5)
	{
		$this->r5 = $r5;
	}

    public function setrave($rave)
	{
		$this->rave = $rave;
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

    public function getr1()
	{
		return $this->r1;
	}

    public function getr2()
	{
		return $this->r2;
	}

    public function getr3()
	{
		return $this->r3;
	}

    public function getr4()
	{
		return $this->r4;
	}

    public function getr5()
	{
		return $this->r5;
	}

    public function getrave()
	{
		return $this->rave;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

	public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}



    public function AddRoughnessLogs(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.roughnesslogs (trackingno,r1,r2,r3,r4,r5,rave,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?,?,?)";
            $params = array($this->gettrackingno(),$this->getr1(),$this->getr2(),$this->getr3(),$this->getr4(),$this->getr5(),$this->getrave(),$this->getlastupdate(),$this->getlastupdatedby());
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