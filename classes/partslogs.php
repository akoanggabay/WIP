<?php
include_once("connection.php");

class partslogs {
    private $lotno;
    private $qty;
    private $lastupdate;
    private $lastupdatedby;
    private $remarks;


	

	function __construct(){

	}

	//setter
	
    public function setlotno($lotno){$this->lotno=$lotno;}
    public function setqty($qty){$this->qty=$qty;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setremarks($remarks){$this->remarks=$remarks;}



	//Getter
    public function getlotno(){return $this->lotno;}
    public function getqty(){return $this->qty;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getremarks(){return $this->remarks;}
    


    public function AddPartsLogs(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.partslogs (lotno,qty,lastupdate,lastupdatedby,remarks) VALUES(?,?,?,?,?)";
            $params = array($this->getlotno(),$this->getqty(),$this->getlastupdate(),$this->getlastupdatedby(),$this->getremarks());
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