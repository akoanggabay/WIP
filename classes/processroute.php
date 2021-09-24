<?php
include_once("connection.php");

class ProcessRoute {
    private $process;
    private $flowsequence;
    private $station;
	private $active;
	private $forpacking;
    private $forincoming;
    private $forbackgrind;


	function __construct(){

	}

	//setter
    
	public function setprocess($process)
	{
		$this->process = $process;
	}

    public function setflowsequence($flowsequence)
	{
		$this->flowsequence = $flowsequence;
	}

    public function setstation($station)
	{
		$this->station = $station;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}

    public function setforpacking($forpacking)
	{
		$this->forpacking = $forpacking;
	}

    public function setforincoming($forincoming)
	{
		$this->forincoming = $forincoming;
	}

    public function setforbackgrind($forbackgrind)
	{
		$this->forbackgrind = $forbackgrind;
	}
	

	//Getter
    public function getprocess()
	{
		return $this->process;
	}

    public function getflowsequence()
	{
		return $this->flowsequence;
	}

    public function getstation()
	{
		return $this->station;
	}

	public function getactive()
	{
		return $this->active;
	}

    public function getforpacking()
	{
		return $this->forpacking;
	}

    public function getforincoming()
	{
		return $this->forincoming;
	}

    public function getforbackgrind()
	{
		return $this->forbackgrind;
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

    public function getStationDetails(){
	
        $conn = new Connection();

        try{
            $conn->open();
            $dataset = $conn->query("SELECT * FROM dbo.processroute where station = '".$this->getstation()."' and process = '".$this->getprocess()."' and active ='1'");

            if ($conn->has_rows($dataset)){
                $reader = $conn->fetch_array($dataset);

                $this->setprocess($reader['process']);
                $this->setflowsequence($reader['flowsequence']);
                $this->setstation($reader['station']);
                $this->setactive($reader['active']);
                $this->setforpacking($reader['forpacking']);
                $this->setforincoming($reader['forincoming']);
                $this->setforbackgrind($reader['forbackgrind']);

            }
            $conn->close();
        }catch(Exception $e){

        }

    }

    public static function getnextstage($process,$flowsequence){
		$conn = new Connection();
		$nextstage = '';
		try{
			$conn->open();

			$dataset = $conn->query("SELECT a.station FROM dbo.processroute a inner join dbo.station b on a.station = b.station
									 WHERE a.flowsequence = (
									 SELECT MIN(flowsequence) 
									 FROM dbo.processroute 
									 WHERE process = '".$process."'  
									 AND active = 1 
									 AND flowsequence > ".$flowsequence.") AND a.process = '".$process."'");

				if($conn->has_rows($dataset)){
					$reader = $conn->fetch_array($dataset);
					$nextstage = $reader['station'];
				}

			$conn->close();
		}catch(Exception $e){

		}
		return $nextstage;
	}

    public static function GetProcessRoute($process)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT b.station,b.description from processroute a inner join station b on a.station = b.station where a.process = '".$process."' and a.active = 1 and a.forpacking = 0 and a.station != 'REG' order by a.flowsequence");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new ProcessRoute();

				$Select->setstation($reader["station"].':'.$reader["description"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function GetProcessRoute2($process)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT b.station,b.description from processroute a inner join station b on a.station = b.station where a.process = '".$process."' and a.active = 1 and a.station != 'REG' order by a.flowsequence");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new ProcessRoute();

				$Select->setstation($reader["station"].':'.$reader["description"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function getpackingprocess($process){
		$conn = new Connection();
		$station = '';
		try{
			$conn->open();

			$dataset = $conn->query("SELECT * from dbo.processroute where process = '".$process."' and forpacking = 1");

				if($conn->has_rows($dataset)){
					$reader = $conn->fetch_array($dataset);
					$station = $reader['station'];
				}

			$conn->close();
		}catch(Exception $e){

		}
		return $station;
	}

	public static function getincomingprocess($process){
		$conn = new Connection();
		$station = '';
		try{
			$conn->open();

			$dataset = $conn->query("SELECT * from dbo.processroute where process = '".$process."' and forincoming = 1");

				if($conn->has_rows($dataset)){
					$reader = $conn->fetch_array($dataset);
					$station = $reader['station'];
				}

			$conn->close();
		}catch(Exception $e){

		}
		return $station;
	}


}

?>