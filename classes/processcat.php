<?php
include_once("connection.php");

class ProcessCat {
    private $process;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function setprocess($process)
	{
		$this->process = $process;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function getprocess()
	{
		return $this->process;
	}

	public function getactive()
	{
		return $this->active;
	}


	public static function GetAllProcessType()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM process where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new ProcessCat();

				$Select->setprocess($reader["process"]);
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