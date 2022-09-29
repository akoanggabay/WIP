<?php
include_once("connection.php");

class passcode {

    private $passcode;
    private $idno;
    private $type;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	function __construct(){

	}

	//setter
	
    public function setpasscode($passcode){$this->passcode=$passcode;}
    public function setidno($idno){$this->idno=$idno;}
    public function settype($type){$this->type=$type;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function getpasscode(){return $this->passcode;}
    public function getidno(){return $this->idno;}
    public function gettype(){return $this->type;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddePasscode(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.passcode (passcode,idno,type,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?)";
            $params = array($this->getpasscode(),$this->getidno(),$this->gettype(),$this->getlastupdate(),$this->getlastupdatedby(),$this->getactive());
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

    public static function checkExist($passcode,$type)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.passcode WHERE passcode ='" . $passcode . "' and type = '".$type."' and active = 1");

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

	public static function getPasscodeIdno($passcode,$type)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.passcode WHERE passcode ='" . $passcode . "' and type = '".$type."' and active = 1");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$result = $reader['idno'];
			} else {
				$result = 'false';
			}

			$conn->close();
		} catch (Exception $e) {
		}
		return $result;
	}

    public function PasscodeData($passcode,$type)
	{
		$conn = new Connection();
		
		try {
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM passcode WHERE passcode ='" .$passcode."' and type = '".$type."' and active = 1");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$this->setidno($reader["idno"]);
				$this->setpasscode($reader["passcode"]);
				$this->settype($reader["type"]);
				$this->setlastupdate($reader["lastupdate"]);
                $this->setlastupdatedby($reader["lastupdatedby"]);
                $this->setactive($reader["active"]);
			}

			$conn->close();
		} catch (Exception $e) {
		}
		
	}

}

?>