<?php
include_once("connection.php");

class bladeheight {
    private $trackingno;
    private $intlot;
    private $ch;
    private $bh1;
    private $bh2;
    private $bh3;
    private $bh4;
    private $bh5;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	

	function __construct(){

	}

	//setter
	
    public function settrackingno($trackingno){$this->trackingno=$trackingno;}
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setch($ch){$this->ch=$ch;}
    public function setbh1($bh1){$this->bh1=$bh1;}
    public function setbh2($bh2){$this->bh2=$bh2;}
    public function setbh3($bh3){$this->bh3=$bh3;}
    public function setbh4($bh4){$this->bh4=$bh4;}
    public function setbh5($bh5){$this->bh5=$bh5;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function gettrackingno(){return $this->trackingno;}
    public function getintlot(){return $this->intlot;}
    public function getch(){return $this->ch;}
    public function getbh1(){return $this->bh1;}
    public function getbh2(){return $this->bh2;}
    public function getbh3(){return $this->bh3;}
    public function getbh4(){return $this->bh4;}
    public function getbh5(){return $this->bh5;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddBladeHeight(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.bladeheight (intlot,ch,bh1,bh2,bh3,bh4,bh5,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->getch(),$this->getbh1(),$this->getbh2(),$this->getbh3(),$this->getbh4(),$this->getbh5(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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
			$dataset =  $conn->query("SELECT * from dbo.bladeheight order by lastupdate desc");
			$counter = 0;
			include_once("user.php");
			
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new bladeheight();
				
				$user->UserData($reader["lastupdatedby"]);
				$Select->settrackingno($reader["trackingno"]);
                $Select->setintlot($reader["intlot"]);
                $Select->setch($reader["ch"]);
				$Select->setbh1($reader["bh1"]);
                $Select->setbh2($reader["bh2"]);
                $Select->setbh3($reader["bh3"]);
                $Select->setbh4($reader["bh4"]);
                $Select->setbh5($reader["bh5"]);
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

	public function UpdateBladeheight($trackingno){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE dbo.bladeheight set ch = ?, bh1 = ?, bh2 = ?, bh3 = ?, bh4 = ?, bh5 = ? WHERE trackingno = ?";
            $params = array($this->getch(),$this->getbh1(),$this->getbh2(),$this->getbh3(),$this->getbh4(),$this->getbh5(),$trackingno);
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
			$dataset =  $conn->query("SELECT * from dbo.bladeheight where trackingno = '".$trackingno."'");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
                
				$user = new User;
				$row = $conn->fetch_array($dataset);
				$user->UserData($row["lastupdatedby"]);
                
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'intlotno'   => $row["intlot"],
				'ch'   => $row["ch"],
				'bh1'   => $row["bh1"],
				'bh2'   => $row["bh2"],
                'bh3'   => $row["bh3"],
                'bh4'   => $row["bh4"],
                'bh5'   => $row["bh5"],
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