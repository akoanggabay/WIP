<?php
include_once("connection.php");

class materialcategory {
    private $category;
    private $description;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
	

	function __construct(){

	}

	//setter
	
    public function setcategory($category){$this->category=$category;}
    public function setdescription($description){$this->description=$description;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}

	//Getter

    public function getcategory(){return $this->category;}
    public function getdescription(){return $this->description;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}

    public function AddMaterialCategory(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.materialcategory (category,description,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?)";
            $params = array($this->getcategory(),$this->getdescription(),$this->getlastupdate(),$this->getlastupdatedby(),$this->getactive());
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

    public static function GetAllMaterialCategory()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM materialcategory where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new materialcategory();

				$Select->setcategory($reader["category"]);
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

}

?>