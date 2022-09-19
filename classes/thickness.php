<?php
include_once("connection.php");

class Thickness {
	private $trackingno;
    private $intlotno;
    private $custcode;
    private $station;
    private $waferno;
	private $p1;
    private $p2;
    private $p3;
    private $p4;
    private $p5;
    private $pave;
    private $ttv;
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

    public function setwaferno($waferno)
	{
		$this->waferno = $waferno;
	}

    public function setp1($p1)
	{
		$this->p1 = $p1;
	}

    public function setp2($p2)
	{
		$this->p2 = $p2;
	}

    public function setp3($p3)
	{
		$this->p3 = $p3;
	}

    public function setp4($p4)
	{
		$this->p4 = $p4;
	}

    public function setp5($p5)
	{
		$this->p5 = $p5;
	}

    public function setpave($pave)
	{
		$this->pave = $pave;
	}

    public function setttv($ttv)
	{
		$this->ttv = $ttv;
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

    public function getwaferno()
	{
		return $this->waferno;
	}

    public function getp1()
	{
		return $this->p1;
	}

    public function getp2()
	{
		return $this->p2;
	}

    public function getp3()
	{
		return $this->p3;
	}

    public function getp4()
	{
		return $this->p4;
	}

    public function getp5()
	{
		return $this->p5;
	}

    public function getpave()
	{
		return $this->pave;
	}

    public function getttv()
	{
		return $this->ttv;
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

    public function AddThickness(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.thickness (intlotno,custcode,station,waferno,p1,p2,p3,p4,p5,pave,ttv,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getintlotno(),$this->getcustcode(),$this->getstation(),$this->getwaferno(),$this->getp1(),$this->getp2(),$this->getp3(),$this->getp4(),$this->getp5(),$this->getpave(),$this->getttv(),$this->getlastupdate(),$this->getlastupdatedby());
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

	public static function GetAllThicknessLogs($intlotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlotno,a.station,b.description,a.p1,a.p2,a.p3,a.p4,a.p5,a.pave,a.lastupdate,a.lastupdatedby,a.ttv,a.waferno FROM dbo.thickness a inner join station b on a.station = b.station 
			where intlotno = '".$intlotno."' and a.lastupdate = (SELECT TOP 1 lastupdate FROM thickness where intlotno = '".$intlotno."') order by lastupdate asc");
			include_once("user.php");
			$user = new User;

            while ($row = $conn->fetch_array($dataset)) {
			$user->UserData($row["lastupdatedby"]);
            $result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlotno'   => $row["intlotno"],
				'station' => $row["station"].':'.$row["description"],
				'p1' => $row["p1"],
				'p2' => $row["p2"],
				'p3' => $row["p3"],
				'p4' => $row["p4"],
				'p5' => $row["p5"],
				'pave' => $row["pave"],
				'ttv' => $row["ttv"],
				'waferno' => $row["waferno"],
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
			$dataset =  $conn->query("SELECT * from dbo.thickness order by lastupdate asc");
			$counter = 0;
			include_once("station.php");
			include_once("user.php");
			$station = new Station;
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Thickness();
				
				$user->UserData($reader["lastupdatedby"]);
				$station->StationDetails($reader["station"]);
				$Select->settrackingno($reader["trackingno"]);
				$Select->setcustcode($reader["custcode"]);
                $Select->setintlotno($reader["intlotno"]);
				$Select->setstation($station->getstation().':'.$station->getdescription());
				$Select->setp1($reader["p1"]);
                $Select->setp2($reader["p2"]);
				$Select->setp3($reader["p3"]);
				$Select->setp4($reader["p4"]);
				$Select->setp5($reader["p5"]);
				$Select->setpave($reader["pave"]);
				$Select->setttv($reader["ttv"]);
				$Select->setwaferno($reader["waferno"]);
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

	public function UpdateThick($trackingno){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE dbo.thickness set waferno = ?, p1 = ?, p2 = ?, p3 = ?, p4 = ?, p5 = ?, pave = ?, ttv = ? WHERE trackingno = ?";
            $params = array($this->getwaferno(),$this->getp1(),$this->getp2(),$this->getp3(),$this->getp4(),$this->getp5(),$this->getpave(),$this->getttv(),$trackingno);
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
			$dataset =  $conn->query("SELECT * from dbo.thickness where trackingno = '".$trackingno."'");
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
				'waferno'   => $row["waferno"],
				'p1'   => number_format((float)$row["p1"], 1, '.', ''),
				'p2'   => number_format((float)$row["p2"], 1, '.', ''),
				'p3'   => number_format((float)$row["p3"], 1, '.', ''),
				'p4'   => number_format((float)$row["p4"], 1, '.', ''),
				'p5'   => number_format((float)$row["p5"], 1, '.', ''),
				'pave'   => number_format((float)$row["pave"], 1, '.', ''),
				'ttv'   => number_format((float)$row["ttv"], 1, '.', ''),
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