<?php
include_once("connection.php");

class supplier {
    private $code;
    private $description;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	

	function __construct(){

	}

	//setter
	
    public function setcode($code){$this->code=$code;}
    public function setdescription($description){$this->description=$description;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}

	//Getter

    public function getcode(){return $this->code;}
    public function getdescription(){return $this->description;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}

    public function AddSupplier(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.supplier (code,description,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?)";
            $params = array($this->getcode(),$this->getdescription(),$this->getlastupdate(),$this->getlastupdatedby(),$this->getactive());
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

    public static function GetAllSupplier()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM supplier where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new supplier();

				$Select->setcode($reader["code"]);
                $Select->setdescription($reader["description"]);
				$Select->setactive($reader["active"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

    public function GetDetails($code)
	{
		$conn = new Connection();
		
		try {
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM supplier WHERE code ='" .$code."' and active = 1");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$this->setcode($reader["code"]);
				$this->setdescription($reader["description"]);
				
			}


			$conn->close();
		} catch (Exception $e) {
		}
		
	}

}

?>