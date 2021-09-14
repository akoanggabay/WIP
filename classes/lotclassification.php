<?php
include_once("connection.php");

class LotClassification {
    private $lottype;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function setlottype($lottype)
	{
		$this->lottype = $lottype;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function getlottype()
	{
		return $this->lottype;
	}

	public function getactive()
	{
		return $this->active;
	}


	public static function GetAllLotType()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM lotclassification where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new LotClassification();

				$Select->setlottype($reader["lottype"]);
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