<?php
include_once("connection.php");

class Roughness {
	private $trackingno;
    private $intlotno;
    private $custcode;
    private $station;
	private $r1;
    private $r2;
    private $r3;
    private $r4;
    private $r5;
    private $rave;
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

    public function setr1($r1)
	{
		$this->r1 = $r1;
	}

    public function setr2($r2)
	{
		$this->r2 = $r2;
	}

    public function setr3($r3)
	{
		$this->r3 = $r3;
	}

    public function setr4($r4)
	{
		$this->r4 = $r4;
	}

    public function setr5($r5)
	{
		$this->r5 = $r5;
	}

    public function setrave($rave)
	{
		$this->rave = $rave;
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

    public function getr1()
	{
		return $this->r1;
	}

    public function getr2()
	{
		return $this->r2;
	}

    public function getr3()
	{
		return $this->r3;
	}

    public function getr4()
	{
		return $this->r4;
	}

    public function getr5()
	{
		return $this->r5;
	}

    public function getrave()
	{
		return $this->rave;
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

    public function AddRoughness(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.roughness (intlotno,custcode,station,r1,r2,r3,r4,r5,rave,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getintlotno(),$this->getcustcode(),$this->getstation(),$this->getr1(),$this->getr2(),$this->getr3(),$this->getr4(),$this->getr5(),$this->getrave(),$this->getlastupdate(),$this->getlastupdatedby());
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

	public static function GetAllRoughnessLogs($intlotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlotno,a.station,b.description,a.r1,a.r2,a.r3,a.r4,a.r5,a.rave,a.lastupdate,a.lastupdatedby FROM dbo.roughness a inner join station b on a.station = b.station where intlotno = '".$intlotno."' order by lastupdate asc");
			include_once("user.php");
			$user = new User;

            while ($row = $conn->fetch_array($dataset)) {
			$user->UserData($row["lastupdatedby"]);
            $result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlotno'   => $row["intlotno"],
				'station' => $row["station"].':'.$row["description"],
				'r1' => $row["r1"],
				'r2' => $row["r2"],
				'r3' => $row["r3"],
				'r4' => $row["r4"],
				'r5' => $row["r5"],
				'rave' => $row["rave"],
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

	public static function TrackGetDetails($trackingno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.roughness where trackingno = '".$trackingno."'");
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
				'r1'   => $row["r1"],
				'r2'   => $row["r2"],
				'r3'   => $row["r3"],
				'r4'   => $row["r4"],
				'r5'   => $row["r5"],
				'rave'   => $row["rave"],
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

	public static function GetAllLogs()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.roughness order by lastupdate asc");
			$counter = 0;
			include_once("station.php");
			include_once("user.php");
			$station = new Station;
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Roughness();
				
				$user->UserData($reader["lastupdatedby"]);
				$station->StationDetails($reader["station"]);
				$Select->settrackingno($reader["trackingno"]);
				$Select->setcustcode($reader["custcode"]);
                $Select->setintlotno($reader["intlotno"]);
				$Select->setstation($station->getstation().':'.$station->getdescription());
				$Select->setr1($reader["r1"]);
                $Select->setr2($reader["r2"]);
				$Select->setr3($reader["r3"]);
				$Select->setr4($reader["r4"]);
				$Select->setr5($reader["r5"]);
				$Select->setrave($reader["rave"]);
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

	public function UpdateRough($trackingno){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE dbo.roughness set r1 = ?, r2 = ?, r3 = ?, r4 = ?, r5 = ?, rave = ? WHERE trackingno = ?";
            $params = array($this->getr1(),$this->getr2(),$this->getr3(),$this->getr4(),$this->getr5(),$this->getrave(),$trackingno);
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