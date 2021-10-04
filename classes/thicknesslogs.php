<?php
include_once("connection.php");

class ThicknessLogs {
    private $id;
	private $trackingno;
    private $waferno;
	private $p1;
    private $p2;
    private $p3;
    private $p4;
    private $p5;
    private $pave;
    private $ttv;
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

    public function setp1($p1)
	{
		$this->p1 = $p1;
	}

    public function setp2($p2)
	{
		$this->p2 = $p2;
	}

    public function setp3($p3)
	{
		$this->p3 = $p3;
	}

    public function setp4($p4)
	{
		$this->p4 = $p4;
	}

    public function setp5($p5)
	{
		$this->p5 = $p5;
	}

    public function setpave($pave)
	{
		$this->pave = $pave;
	}

    public function setttv($ttv)
	{
		$this->ttv = $ttv;
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

    public function getp1()
	{
		return $this->p1;
	}

    public function getp2()
	{
		return $this->p2;
	}

    public function getp3()
	{
		return $this->p3;
	}

    public function getp4()
	{
		return $this->p4;
	}

    public function getp5()
	{
		return $this->p5;
	}

    public function getpave()
	{
		return $this->pave;
	}

    public function getttv()
	{
		return $this->ttv;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

	public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}



    public function AddThicknessLogs(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.thicknesslogs (trackingno,waferno,p1,p2,p3,p4,p5,pave,ttv,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->gettrackingno(),$this->getwaferno(),$this->getp1(),$this->getp2(),$this->getp3(),$this->getp4(),$this->getp5(),$this->getpave(),$this->getttv(),$this->getlastupdate(),$this->getlastupdatedby());
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