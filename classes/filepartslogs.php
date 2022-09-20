<?php
include_once("connection.php");

class FilePartsLogs {
    private $id;
    private $filename;
    private $partno;
	private $partslotno;
    private $status;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    
	


	function __construct(){

	}

	//setter

    public function setid($id)
	{
		$this->id = $id;
	}

    public function setfilename($filename)
	{
		$this->filename = $filename;
	}

    public function setpartno($partno)
	{
		$this->partno = $partno;
	}

	public function setpartslotno($partslotno)
	{
		$this->partslotno = $partslotno;
	}

    public function setstatus($status)
	{
		$this->status = $status;
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
    public function getid()
	{
		return $this->id;
	}

    public function getfilename()
	{
		return $this->filename;
	}

    public function getpartno()
	{
		return $this->partno;
	}

	public function getpartslotno()
	{
		return $this->partslotno;
	}

    public function getstatus()
	{
		return $this->status;
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

    public static function GetAllFileLogs()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT top (200) * FROM dbo.filepartslogs order by lastupdate desc");
			$counter = 0;
			include_once("user.php");
			
			
			$user = new User;
			
			while($reader = $conn->fetch_array($dataset)){
				$Select = new FilePartsLogs();
				$user->UserData($reader["lastupdatedby"]);
	
				$Select->setid($reader["trackingno"]);
				$Select->setfilename($reader["filename"]);
                $Select->setpartno($reader["partno"]);
                $Select->setpartslotno($reader["partslotno"]);
                $Select->setstatus($reader["status"]);
                $Select->setremarks($reader["remarks"]);
                $Select->setlastupdate($reader["lastupdate"]);
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

    public function AddFilelotlogs(){
		$conn = new Connection();
        $success = true;
		try{
			/* $conn->open();
			$result = $conn->query("INSERT INTO dbo.custlotno (custcode,custlotno,deviceno,qty,waferqty,datestart,shipbackdate,waferthickness,requiredthickness,processcat,lottype,dateupload,uploadby,status) VALUES('".$this->getcustcode()."','".$this->getcustlotno()."','".$this->getdeviceno()."','".$this->getqty()."','".$this->getwaferqty()."','".$this->getdatestart()."','".$this->getshipbackdate()."','".$this->getwaferthickness()."','".$this->getrequiredthickness()."','".$this->getprocesscat()."','".$this->getlottype()."',GETDATE(),'".$this->getuploadby()."','".$this->getstatus()."')"); */
			
            $con = $conn->open();
            $sql = "INSERT INTO dbo.filepartslogs (filename,partno,partslotno,status,remarks,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?)";
            $params = array($this->getfilename(),$this->getpartno(),$this->getpartslotno(),$this->getstatus(),$this->getremarks(),date("Y-m-d h:i:sa"),$this->getlastupdatedby());
            $stmt = sqlsrv_query( $con, $sql, $params);
            //echo $stmt;
           $row = sqlsrv_rows_affected($stmt);
            if($row == true)
            {
                $success = true;
            }
            else
            {
                $success = false;
            }
			$conn->close();
		}catch(Exception $e){
            $success = false;
		}
        return $success;	
	}



}

?>