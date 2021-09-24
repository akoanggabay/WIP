<?php
include_once("connection.php");

class WI {
    private $id;
	private $intlotno;
    private $station;
    private $instruction;
    private $condition;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
	


	function __construct(){

	}

	//setter
    
	public function setid($id)
	{
		$this->id = $id;
	}

	public function setintlotno($intlotno)
	{
		$this->intlotno = $intlotno;
	}

    public function setstation($station)
	{
		$this->station = $station;
	}

    public function setinstruction($instruction)
	{
		$this->instruction = $instruction;
	}

    public function setcondition($condition)
	{
		$this->condition = $condition;
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
    public function getid()
	{
		return $this->id;
	}

	public function getintlotno()
	{
		return $this->intlotno;
	}

    public function getstation()
	{
		return $this->station;
	}

    public function getinstruction()
	{
		return $this->instruction;
	}

    public function getcondition()
	{
		return $this->condition;
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


	public static function GetAllMachineType()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT distinct(type) FROM dbo.machinetype where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new MachineType();

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

    public function AddWI(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.wi (intlotno,station,instruction,condition,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?)";
            $params = array($this->getintlotno(),$this->getstation(),$this->getinstruction(),$this->getcondition(),date("Y-m-d h:i:sa"),$this->getlastupdatedby(),1);
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

	public static function GetAllWI($intlotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT  * from dbo.wi where intlotno = '".$intlotno."' and active = 1");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				$do;
				$qo;
				$con = '';
				$user = new User;
				
				while ($row = $conn->fetch_array($dataset)) {
				

				if($row["condition"] != '' || !empty($row["condition"]))
				{
					$con = @$row["condition"];
				}
				else
				{
					$con = '';
				}
				$user->UserData($row["lastupdatedby"]);
				$result[] = array(
				'id'   => $row["id"],
				'intlotno'   => $row["intlotno"],
				'station' => $row["station"],
				'instruction' => $row["instruction"],
				'condition' => $con,
				'lastupdate' => $row["lastupdate"]->format('F j, Y g:i:m a'),
				'lastupdatedby' => $user->getfname().' '.$user->getlname()
				);
				}
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