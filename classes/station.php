<?php
include_once("connection.php");

class Station {
    private $station;
    private $description;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function setstation($station)
	{
		$this->station = $station;
	}

    public function setdescription($description)
	{
		$this->description = $description;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function getstation()
	{
		return $this->station;
	}

    public function getdescription()
	{
		return $this->description;
	}

	public function getactive()
	{
		return $this->active;
	}


	public function StationDetails($station){
	
    $conn = new Connection();

            try{
                $conn->open();
                $dataset = $conn->query("SELECT * FROM dbo.station where station = '".$station."' and active ='1'");

                if ($conn->has_rows($dataset)){
                    $reader = $conn->fetch_array($dataset);

                    $this->setstation($reader['station']);
                    $this->setdescription($reader['description']);
                    $this->setactive($reader['active']);
                }
                $conn->close();
            }catch(Exception $e){

            }

    }


}

?>