<?php
include_once("connection.php");

class WR {
    private $wr;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function setwr($wr)
	{
		$this->wr = $wr;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function getwr()
	{
		return $this->wr;
	}

	public function getactive()
	{
		return $this->active;
	}


	public static function GetAllWR()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT wr FROM dbo.wr where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new WR();

				$Select->setwr($reader["wr"]);
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