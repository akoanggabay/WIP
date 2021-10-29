<?php
include_once("connection.php");

class Machine {
    private $machineid;
    private $processcat;
	private $station;
    private $machinetype;
    private $status;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	function __construct(){

	}

	//setter
    
    public function setmachineid($machineid)
	{
		$this->machineid = $machineid;
	}

	public function setprocesscat($processcat)
	{
		$this->processcat = $processcat;
	}

    public function setstation($station)
	{
		$this->station = $station;
	}

    public function setmachinetype($machinetype)
	{
		$this->machinetype = $machinetype;
	}

    public function setstatus($status)
	{
		$this->status = $status;
	}

    public function setlastupdate($lastupdate)
	{
		$this->lastupdate = $lastupdate;
	}

    public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function getmachineid()
	{
		return $this->machineid;
	}

    public function getprocesscat()
	{
		return $this->processcat;
	}

    public function getstation()
	{
		return $this->station;
	}

    public function getmachinetype()
	{
		return $this->machinetype;
	}

    public function getstatus()
	{
		return $this->status;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

    public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}

	public function getactive()
	{
		return $this->active;
	}


	public function MachineDetails($machineid){
	
    $conn = new Connection();

            try{
                $conn->open();
                $dataset = $conn->query("SELECT * FROM dbo.machine where machineid = '".$machineid."' and active ='1'");

                if ($conn->has_rows($dataset)){
                    $reader = $conn->fetch_array($dataset);

                    $this->setmachineid($reader['machineid']);
                    $this->setprocesscat($reader['processcat']);
                    $this->setstation($reader['station']);
                    $this->setmachinetype($reader['machinetype']);
                    $this->setstatus($reader['status']);
                    $this->setlastupdate($reader['lastupdate']);
                    $this->setlastupdatedby($reader['lastupdatedby']);
                    $this->setactive($reader['active']);
                }
                $conn->close();
            }catch(Exception $e){

            }

    }

	public static function GetMachineStation($processcat,$station)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from machine where processcat = '".$processcat."' and station = '".$station."' and active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Machine();

				$Select->setmachineid($reader["machineid"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function checkExist($machineid,$processcat)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.machine WHERE machineid ='" .$machineid."' and processcat = '".$processcat."'");

			if ($conn->has_rows($dataset)) {

				$result = 'true';
			} else {
				$result = 'false';
			}

			$conn->close();
		} catch (Exception $e) {
		}
		return $result;
	}

	public function AddMachine(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.machine (machineid,processcat,station,machinetype,status,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?)";
            $params = array($this->getmachineid(),$this->getprocesscat(),$this->getstation(),$this->getmachinetype(),$this->getstatus(),date("Y-m-d h:i:sa"),$this->getlastupdatedby(),1);
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


}

?>