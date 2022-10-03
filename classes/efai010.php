<?php
include_once("connection.php");

class efai010 {
    private $custcode;
	private $intlot;
    private $wswr;
    private $swrno;
	private $wafersize;
    private $wafertype;
	private $inktype;
    private $inkused;
	private $inkexpdate;
	private $inkexpired;
    private $inkviresult;
    private $inspectiontype;
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

    public function setwafertype($wafertype)
	{
		$this->wafertype = $wafertype;
	}

    public function setinktype($inktype)
	{
		$this->inktype = $inktype;
	}

    public function setinkused($inkused)
	{
		$this->inkused = $inkused;
	}

    public function setinkexpdate($inkexpdate)
	{
		$this->inkexpdate = $inkexpdate;
	}

    public function setinkexpired($inkexpired)
	{
		$this->inkexpired = $inkexpired;
	}

    public function setinkviresult($inkviresult)
	{
		$this->inkviresult = $inkviresult;
	}

    public function setinspectiontype($inspectiontype)
	{
		$this->inspectiontype = $inspectiontype;
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

    public function getwafertype()
	{
		return $this->wafertype;
	}

    public function getinktype()
	{
		return $this->inktype;
	}

    public function getinkused()
	{
		return $this->inkused;
	}

    public function getinkexpdate()
	{
		return $this->inkexpdate;
	}

    public function getinkexpired()
	{
		return $this->inkexpired;
	}

    public function getinkviresult()
	{
		return $this->inkviresult;
	}

    public function getinspectiontype()
	{
		return $this->inspectiontype;
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

    public function AddeFAI010(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai010 (custcode,intlot,wswr,swrno,wafertype,inktype,inkused,inkexpdate,inkexpired,inkviresult,inspectiontype,remarks,lastupdate,lastupdatedby,active,wafersize) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->getwafertype(),$this->getinktype(),$this->getinkused(),$this->getinkexpdate(),$this->getinkexpired(),$this->getinkviresult(),$this->getinspectiontype(),$this->getremarks(),date("Y-m-d H:i:sa"),$this->getlastupdatedby(),1,$this->getwafersize());
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