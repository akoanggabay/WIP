<?php
include_once("connection.php");

class DeviceType {
    private $type;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function settype($type)
	{
		$this->type = $type;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function gettype()
	{
		return $this->type;
	}

	public function getactive()
	{
		return $this->active;
	}


	public static function GetAllDeviceType()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT distinct(type) FROM dbo.devicetype where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new DeviceType();

				$Select->settype($reader["type"]);
				//$Select->setactive($reader["active"]);
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