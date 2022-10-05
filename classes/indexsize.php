<?php
include_once("connection.php");

class indexsize {
    private $trackingno;
    private $intlot;
    private $ch;
    private $station;
    private $is1;
    private $is2;
    private $is3;
    private $is4;
    private $is5;
    private $lastupdate;
    private $lastupdatedby;
    private $active;


	function __construct(){

	}

	//setter

    public function settrackingno($trackingno){$this->trackingno=$trackingno;}
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setch($ch){$this->ch=$ch;}
    public function setstation($station){$this->station=$station;}
    public function setis1($is1){$this->is1=$is1;}
    public function setis2($is2){$this->is2=$is2;}
    public function setis3($is3){$this->is3=$is3;}
    public function setis4($is4){$this->is4=$is4;}
    public function setis5($is5){$this->is5=$is5;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function gettrackingno(){return $this->trackingno;}
    public function getintlot(){return $this->intlot;}
    public function getch(){return $this->ch;}
    public function getstation(){return $this->station;}
    public function getis1(){return $this->is1;}
    public function getis2(){return $this->is2;}
    public function getis3(){return $this->is3;}
    public function getis4(){return $this->is4;}
    public function getis5(){return $this->is5;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddIndexSize(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.indexsize (intlot,ch,station,is1,is2,is3,is4,is5,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->getch(),$this->getstation(),$this->getis1(),$this->getis2(),$this->getis3(),$this->getis4(),$this->getis5(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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
			$dataset =  $conn->query("SELECT * from dbo.indexsize order by lastupdate desc");
			$counter = 0;
			include_once("user.php");
			
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new indexsize();
				
				$user->UserData($reader["lastupdatedby"]);
				$Select->settrackingno($reader["trackingno"]);
                $Select->setintlot($reader["intlot"]);
                $Select->setch($reader["ch"]);
				$Select->setis1($reader["is1"]);
                $Select->setis2($reader["is2"]);
                $Select->setis3($reader["is3"]);
                $Select->setis4($reader["is4"]);
                $Select->setis5($reader["is5"]);
				$Select->setstation($reader["station"]);
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

	public function UpdateIndexsize($trackingno){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE dbo.indexsize set ch = ?, is1 = ?, is2 = ?, is3 = ?, is4 = ?, is5 = ? WHERE trackingno = ?";
            $params = array($this->getch(),$this->getis1(),$this->getis2(),$this->getis3(),$this->getis4(),$this->getis5(),$trackingno);
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
			$dataset =  $conn->query("SELECT * from dbo.indexsize where trackingno = '".$trackingno."'");
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
				'intlotno'   => $row["intlot"],
				'ch'   => $row["ch"],
                'station'   => $station->getstation().':'.$station->getdescription(),
				'is1'   => $row["is1"],
				'is2'   => $row["is2"],
                'is3'   => $row["is3"],
                'is4'   => $row["is4"],
                'is5'   => $row["is5"],
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