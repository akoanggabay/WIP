<?php
include_once("connection.php");

class Reject {
    private $trackingno;
    private $custcode;
    private $intlotno;
	private $station;
    private $machine;
    private $waferno;
    private $ddetails;
    private $dqty;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
	


	function __construct(){

	}

	//setter

    public function settrackingno($trackingno)
	{
		$this->trackingno = $trackingno;
	}
    
	public function setintlotno($intlotno)
	{
		$this->intlotno = $intlotno;
	}

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

    public function setstation($station)
	{
		$this->station = $station;
	}

    public function setmachine($machine)
	{
		$this->machine = $machine;
	}

    public function setwaferno($waferno)
	{
		$this->waferno = $waferno;
	}

    public function setddetails($ddetails)
	{
		$this->ddetails = $ddetails;
	}

    public function setdqty($dqty)
	{
		$this->dqty = $dqty;
	}

    public function setremarks($remarks)
	{
		$this->remarks = $remarks;
	}

    public function setlastupdate($lastupdate)
	{
		$this->lastupdate = $lastupdate;
	}

	public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}
	

	//Getter

    public function gettrackingno()
	{
		return $this->trackingno;
	}

    public function getintlotno()
	{
		return $this->intlotno;
	}

    public function getcustcode()
	{
		return $this->custcode;
	}

    public function getstation()
	{
		return $this->station;
	}

    public function getmachine()
	{
		return $this->machine;
	}

    public function getwaferno()
	{
		return $this->waferno;
	}

    public function getddetails()
	{
		return $this->ddetails;
	}

    public function getdqty()
	{
		return $this->dqty;
	}

    public function getremarks()
	{
		return $this->remarks;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

	public function getlastupdatedby()
	{
		return $this->lastupdatedby;
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

    public function AddReject(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			//$con = $conn->open();
            $sql = "INSERT INTO dbo.reject (custcode,intlotno,station,machine,waferno,ddetails,dqty,remarks,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlotno(),$this->getstation(),$this->getmachine(),$this->getwaferno(),$this->getddetails(),$this->getdqty(),$this->getremarks(),$this->getlastupdate(),$this->getlastupdatedby());
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

	public static function GetAllIntRejLogs($intlotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlotno,a.station,a.machine,a.ddetails,a.dqty,a.remarks,a.lastupdate,a.lastupdatedby,a.waferno,b.description FROM dbo.reject a inner join station b on a.station = b.station where intlotno = '".$intlotno."' order by lastupdate asc");
			include_once("user.php");
			$user = new User;

            while ($row = $conn->fetch_array($dataset)) {
			$user->UserData($row["lastupdatedby"]);
            $result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlotno'   => $row["intlotno"],
				'station' => $row["station"].':'.$row["description"],
				'machine' => $row["machine"],
				'waferno' => strtoupper($row["waferno"]),
				'ddetails' => $row["ddetails"],
				'dqty' => $row["dqty"],
				'remarks' => $row["remarks"],
				'lastupdate' => $row["lastupdate"]->format('F j, Y g:i:s a'),
				'lastupdatedby' => $user->getfname().' '.$user->getlname()
            );
            }
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function GetAllLogs()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.reject order by lastupdate asc");
			$counter = 0;
			include_once("station.php");
			include_once("user.php");
			$station = new Station;
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Reject();
				
				$user->UserData($reader["lastupdatedby"]);
				$station->StationDetails($reader["station"]);
				$Select->settrackingno($reader["trackingno"]);
				$Select->setcustcode($reader["custcode"]);
				$Select->setwaferno($reader["waferno"]);
                $Select->setintlotno($reader["intlotno"]);
				$Select->setstation($station->getstation().':'.$station->getdescription());
				$Select->setmachine($reader["machine"]);
                $Select->setddetails($reader["ddetails"]);
				$Select->setdqty($reader["dqty"]);
				$Select->setremarks($reader["remarks"]);
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

	public static function TrackGetDetails($trackingno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.reject where trackingno = '".$trackingno."'");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				include_once("station.php");
				$user = new User;
				$station = new Station;
				$row = $conn->fetch_array($dataset);
				$user->UserData($row["lastupdatedby"]);
				$station->StationDetails($row["station"]);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlotno'   => $row["intlotno"],
				'station'   => $station->getstation().':'.$station->getdescription(),
				'machine'   => $row["machine"],
				'waferno'   => $row["waferno"],
				'ddetails'   => $row["ddetails"],
				'lastupdate'   => $row["lastupdate"]->format('F j, Y, g:i:s a'),
				'lastupdatedby'   => $user->getfname().' '.$user->getlname(),
				'dqty'   => $row["dqty"],
				'remarks'   => $row["remarks"]
				
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

	public function UpdateReject($trackingno){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE dbo.reject set waferno = ?, ddetails = ?, dqty = ?, remarks = ? WHERE trackingno = ?";
            $params = array($this->getwaferno(),$this->getddetails(),$this->getdqty(),$this->getremarks(),$trackingno);
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