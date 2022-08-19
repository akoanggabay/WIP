<?php
include_once("connection.php");

class partno {
    private $code;
    private $description;
    private $materialcategory;
    private $processcategory;
    private $supplier;
    private $qty;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	

	function __construct(){

	}

	//setter
	
    public function setcode($code){$this->code=$code;}
    public function setdescription($description){$this->description=$description;}
    public function setmaterialcategory($materialcategory){$this->materialcategory=$materialcategory;}
    public function setprocesscategory($processcategory){$this->processcategory=$processcategory;}
    public function setsupplier($supplier){$this->supplier=$supplier;}
    public function setqty($qty){$this->qty=$qty;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function getcode(){return $this->code;}
    public function getdescription(){return $this->description;}
    public function getmaterialcategory(){return $this->materialcategory;}
    public function getprocesscategory(){return $this->processcategory;}
    public function getsupplier(){return $this->supplier;}
    public function getqty(){return $this->qty;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddPartno(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.partno (code,description,materialcategory,processcategory,supplier,qty,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcode(),$this->getdescription(),$this->getmaterialcategory(),$this->getprocesscategory(),$this->getsupplier(),$this->getqty(),$this->getlastupdate(),$this->getlastupdatedby(),$this->getactive());
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

    public static function GetAllPartno()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT *,COALESCE((select sum(currqty) from partslotno where partno = code),0) as qty FROM partno where active = 1");
			$counter = 0;

			include('supplier.php');
			$supplier = new supplier;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new partno();
				
				$supplier->GetDetails($reader["supplier"]);
				$Select->setcode($reader["code"]);
                $Select->setdescription($reader["description"]);
                $Select->setmaterialcategory($reader["materialcategory"]);
                $Select->setprocesscategory($reader["processcategory"]);
                $Select->setsupplier($supplier->getdescription());
                $Select->setqty($reader["qty"]);
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

    public static function GetPartno($processcat,$materialcat)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from partno where processcategory = '".$processcat."' and materialcategory = '".$materialcat."' and active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Partno();

				$Select->setcode($reader["code"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

    public function PartNoDetails($partno)
	{
		$conn = new Connection();
		
		try {
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM partno WHERE code ='" .$partno."' and active = 1");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$this->setcode($reader["code"]);
				$this->setdescription($reader["description"]);
				$this->setmaterialcategory($reader["materialcategory"]);
				$this->setprocesscategory($reader["processcategory"]);
                $this->setsupplier($reader["supplier"]);
				

			}


			$conn->close();
		} catch (Exception $e) {
		}
		
	}

}

?>