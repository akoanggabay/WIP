<?php
include_once("connection.php");

class ringcut {
    private $intlot;
    private $waferno;
    private $measurement;
    private $lastupdate;
    private $lastupdatedby;
    private $active;




	function __construct(){

	}

	//setter
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setwaferno($waferno){$this->waferno=$waferno;}
    public function setmeasurement($measurement){$this->measurement=$measurement;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter
    public function getintlot(){return $this->intlot;}
    public function getwaferno(){return $this->waferno;}
    public function getmeasurement(){return $this->measurement;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}
    

    public function AddRingCut(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.ringcut (intlot,waferno,measurement,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->getwaferno(),$this->getmeasurement(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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