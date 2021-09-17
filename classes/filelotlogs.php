<?php
include_once("connection.php");

class FileLotLogs {
    private $id;
    private $filename;
    private $custcode;
	private $custlotno;
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

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setcustlotno($custlotno)
	{
		$this->custlotno = $custlotno;
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

    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getcustlotno()
	{
		return $this->custlotno;
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
			$dataset =  $conn->query("SELECT top (200) * FROM dbo.filelogs order by lastupdate desc");
			$counter = 0;
			include_once("user.php");
			include_once("customer.php");
			
			$user = new User;
			$cust = new Customer;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new FileLotLogs();
				$user->UserData($reader["lastupdatedby"]);
				$cust->CustomerDetails($reader["custcode"]);
				$Select->setid($reader["id"]);
				$Select->setfilename($reader["filename"]);
                $Select->setcustcode($cust->getcustname());
                $Select->setcustlotno($reader["custlotno"]);
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
            $sql = "INSERT INTO dbo.filelogs (filename,custcode,custlotno,status,remarks,lastupdate,lastupdatedby) VALUES(?,?,?,?,?,?,?)";
            $params = array($this->getfilename(),$this->getcustcode(),$this->getcustlotno(),$this->getstatus(),$this->getremarks(),date("Y-m-d h:i:sa"),$this->getlastupdatedby());
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