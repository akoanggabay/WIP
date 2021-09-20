<?php
include_once("connection.php");

class User {
    private $idno;
    private $fname;
	private $lname;
    private $email;
    private $password;
    private $birthday;
    private $usertype;
	private $active;


	function __construct(){

	}

	//setter
    
	public function setidno($idno)
	{
		$this->idno = $idno;
	}

    public function setfname($fname)
	{
		$this->fname = $fname;
	}

	public function setlname($lname)
	{
		$this->lname = $lname;
	}

    public function setemail($email)
	{
		$this->email = $email;
	}

    public function setpassword($password)
	{
		$this->password = $password;
	}

    public function setbirthday($birthday)
	{
		$this->birthday = $birthday;
	}

    public function setusertype($usertype)
	{
		$this->usertype = $usertype;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}

	//Getter
    public function getidno()
	{
		return $this->idno;
	}

    public function getfname()
	{
		return $this->fname;
	}

	public function getlname()
	{
		return $this->lname;
	}

    public function getemail()
	{
		return $this->email;
	}

    public function getpassword()
	{
		return $this->password;
	}

    public function getbirthday()
	{
		return $this->birthday;
	}

    public function getusertype()
	{
		return $this->usertype;
	}

	public function getactive()
	{
		return $this->active;
	}

    public static function checkExist($idno)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.users WHERE idno ='" . $idno . "' and active = 1");

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


    public function UserReg(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.users (idno,fname,lname,password,birthday,usertype,active,dateregistered) VALUES(?,?,?,?,?,?,?,?)";
            $params = array($this->getidno(),$this->getfname(),$this->getlname(),password_hash($this->getpassword(), PASSWORD_DEFAULT),$this->getbirthday(),$this->getusertype(),1,date("Y-m-d h:i:sa"));
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

    public function UserData($idno)
	{
		$conn = new Connection();
		
		try {
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM users WHERE idno ='" .$idno."' and active = 1");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$this->setidno($reader["idno"]);
				$this->setfname($reader["fname"]);
				$this->setlname($reader["lname"]);
				$this->setbirthday($reader["birthday"]);
                $this->setusertype($reader["usertype"]);
				

			}


			$conn->close();
		} catch (Exception $e) {
		}
		
	}

    public static function checkUser($idno,$pass)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM users WHERE idno ='" . $idno . "'");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$hash = $reader["password"];
				if(password_verify($pass, $hash))
				{
					$result = 'true';
				}
				else
				{
					$result = 'false';
				}
				
			} else {
				$result = 'false1';
			}

			$conn->close();
		} catch (Exception $e) {
		}
		return $result;
	}

	public static function GetAllUser()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM dbo.users");
			$counter = 0;
			$active = '';
			while($reader = $conn->fetch_array($dataset)){
				$Select = new User();
				if($reader["active"] == 1)
				{
					$active = 'Active';
				}
				else
				{
					$active = 'Inactive';
				}
				$Select->setidno($reader["idno"]);
				$Select->setfname($reader["fname"]);
                $Select->setlname($reader["lname"]);
                $Select->setbirthday($reader["birthday"]->format('F j, Y'));
                $Select->setusertype($reader["usertype"]);
                $Select->setactive($active);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}



}

?>