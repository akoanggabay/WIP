<?php
include_once("connection.php");

class efai006 {
    private $custcode;
	private $intlot;
    private $wswr;
    private $swrno;
	private $wafersaw;
    private $wafercondition;
    private $wafertype;
	private $tapetype;
    private $tapeused;
	private $tapethickness;
	private $requiredwaferthickness;
    private $actualwaferthickness;
    private $requiredwaferorientation;
    private $actualwaferorientation;
    private $highmaginspectionrequired;
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

	public function setwafersaw($wafersaw)
	{
		$this->wafersaw = $wafersaw;
	}

    public function setwafercondition($wafercondition)
	{
		$this->wafercondition = $wafercondition;
	}

    public function setwafertype($wafertype)
	{
		$this->wafertype = $wafertype;
	}

    public function settapetype($tapetype)
	{
		$this->tapetype = $tapetype;
	}

    public function settapeused($tapeused)
	{
		$this->tapeused = $tapeused;
	}

    public function settapethickness($tapethickness)
	{
		$this->tapethickness = $tapethickness;
	}

    public function setrequiredwaferthickness($requiredwaferthickness)
	{
		$this->requiredwaferthickness = $requiredwaferthickness;
	}

    public function setactualwaferthickness($actualwaferthickness)
	{
		$this->actualwaferthickness = $actualwaferthickness;
	}

    public function setrequiredwaferorientation($requiredwaferorientation)
	{
		$this->requiredwaferorientation = $requiredwaferorientation;
	}

    public function setactualwaferorientation($actualwaferorientation)
	{
		$this->actualwaferorientation = $actualwaferorientation;
	}

    public function sethighmaginspectionrequired($highmaginspectionrequired)
	{
		$this->highmaginspectionrequired = $highmaginspectionrequired;
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

	public function getwafersaw()
	{
		return $this->wafersaw;
	}

    public function getwafercondition()
	{
		return $this->wafercondition;
	}

    public function getwafertype()
	{
		return $this->wafertype;
	}

    public function gettapetype()
	{
		return $this->tapetype;
	}

    public function gettapeused()
	{
		return $this->tapeused;
	}

    public function gettapethickness()
	{
		return $this->tapethickness;
	}

    public function getrequiredwaferthickness()
	{
		return $this->requiredwaferthickness;
	}

    public function getactualwaferthickness()
	{
		return $this->actualwaferthickness;
	}

    public function getrequiredwaferorientation()
	{
		return $this->requiredwaferorientation;
	}

    public function getactualwaferorientation()
	{
		return $this->actualwaferorientation;
	}

    public function gethighmaginspectionrequired()
	{
		return $this->highmaginspectionrequired;
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

    public function AddeFAI006(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.efai006 (custcode,intlot,wswr,swrno,wafercondition,wafertype,tapetype,tapeused,tapethickness,requiredwaferthickness,actualwaferthickness,requiredwaferorientation,actualwaferorientation,highmaginspectionrequired,remarks,lastupdate,lastupdatedby,active,wafersaw) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getwswr(),$this->getswrno(),$this->getwafercondition(),$this->getwafertype(),$this->gettapetype(),$this->gettapeused(),$this->gettapethickness(),$this->getrequiredwaferthickness(),$this->getactualwaferthickness(),$this->getrequiredwaferorientation(),$this->getactualwaferorientation(),$this->gethighmaginspectionrequired(),$this->getremarks(),date("Y-m-d H:i:sa"),$this->getlastupdatedby(),1,$this->getwafersaw());
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