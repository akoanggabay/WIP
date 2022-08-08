<?php
include_once("connection.php");

class washparameter {
    private $intlot;
    private $time;
    private $rpm;
    private $lastupdate;
    private $lastupdatedby;
    private $active;



	function __construct(){

	}

	//setter
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function settime($time){$this->time=$time;}
    public function setrpm($rpm){$this->rpm=$rpm;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}

	//Getter
    public function getintlot(){return $this->intlot;}
    public function gettime(){return $this->time;}
    public function getrpm(){return $this->rpm;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}
    
   


    public function AddWashParameter(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.washparameter (intlot,time,rpm,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->gettime(),$this->getrpm(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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