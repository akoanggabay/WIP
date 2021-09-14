<?php
include_once("connection.php");

class SubProcessCat {
    private $process;
    private $subprocess;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function setprocess($process)
	{
		$this->process = $process;
	}

    public function setsubprocess($subprocess)
	{
		$this->subprocess = $subprocess;
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

    public function getsubprocess()
	{
		return $this->subprocess;
	}

	public function getactive()
	{
		return $this->active;
	}


	public static function GetDetails($processcat)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM dbo.subprocess where process ='".$processcat."' and active = 1");
			if ($conn->has_rows($dataset)) {
				$row = $conn->fetch_array($dataset);
				$result[] = array(
				'processcat'   => $row["process"],
				'subprocesscat'   => $row["subprocess"],
				'active'   => $row["active"]
				);
			}
			else
			{
				$result = 'false';
			}
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}


}

?>