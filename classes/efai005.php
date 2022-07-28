<?php
include_once("connection.php");

class efai005 {
    private $custcode;
	private $intlot;
    private $wswr;
    private $swrno;
    private $wafertype;
    private $highmaginspection;
    private $wafernoinspected;
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

    public function sethighmaginspection($highmaginspection)
	{
		$this->highmaginspection = $highmaginspection;
	}

    public function setwafernoinspected($wafernoinspected)
	{
		$this->wafernoinspected = $wafernoinspected;
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

    public function gethighmaginspection()
	{
		return $this->highmaginspection;
	}
    public function getwafernoinspected()
	{
		return $this->wafernoinspected;
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

    public function AddeFAI0052(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai005 (custcode,intlot,wswr,swrno,wafertype,highmaginspection,wafernoinspected,remarks,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->getwafertype(),$this->gethighmaginspection(),$this->getwafernoinspected(),$this->getremarks(),date("Y-m-d h:i:s"),$this->getlastupdatedby(),1);
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

    public function AddeFAI005(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai005 (custcode,intlot,wswr,swrno,wafertype,highmaginspection,wafernoinspected,remarks,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->getwafertype(),$this->gethighmaginspection(),$this->getwafernoinspected(),$this->getremarks(),date("Y-m-d h:i:s"),$this->getlastupdatedby(),1);
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