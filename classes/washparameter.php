<?php
include_once("connection.php");

class washparameter {
    private $trackingno;
    private $intlot;
    private $time;
    private $rpm;
    private $lastupdate;
    private $lastupdatedby;
    private $active;



	function __construct(){

	}

	//setter
    public function settrackingno($trackingno){$this->trackingno=$trackingno;}
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function settime($time){$this->time=$time;}
    public function setrpm($rpm){$this->rpm=$rpm;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}

	//Getter
    public function gettrackingno(){return $this->trackingno;}
    public function getintlot(){return $this->intlot;}
    public function gettime(){return $this->time;}
    public function getrpm(){return $this->rpm;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}
    
   


    public function AddWashParameter(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.washparameter (intlot,time,rpm,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->gettime(),$this->getrpm(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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

    public static function GetAllLogs()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.washparameter order by lastupdate desc");
			$counter = 0;
			include_once("user.php");
			
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new washparameter();
				
				$user->UserData($reader["lastupdatedby"]);
				$Select->settrackingno($reader["trackingno"]);
                $Select->setintlot($reader["intlot"]);
                $Select->settime($reader["time"]);
				$Select->setrpm($reader["rpm"]);
				$Select->setlastupdate($reader["lastupdate"]->format('F j, Y g:i:s a'));
				$Select->setlastupdatedby($user->getfname().' '.$user->getlname());
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public function UpdateWashparameter($trackingno){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE dbo.washparameter set time = ?, rpm = ? WHERE trackingno = ?";
            $params = array($this->gettime(),$this->getrpm(),$trackingno);
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

	public static function TrackGetDetails($trackingno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.washparameter where trackingno = '".$trackingno."'");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
                
				$user = new User;
				
				$row = $conn->fetch_array($dataset);
				$user->UserData($row["lastupdatedby"]);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'intlotno'   => $row["intlot"],
				'time'   => $row["time"],
				'rpm'   => $row["rpm"],
				'lastupdate'   => $row["lastupdate"]->format('F j, Y, g:i:s a'),
				'lastupdatedby'   => $user->getfname().' '.$user->getlname()
				
				);
			}
			else
			{
				$result = 'false';
			}
			$conn->close();
			
		}catch(Exception $e){
			$result = 'false';
			echo $e;
		}
		return $result;
	}

}

?>