<?php
include_once("connection.php");

class UserType {
    private $usertype;
	private $active;
	


	function __construct(){

	}

	//setter
    
	public function setusertype($usertype)
	{
		$this->usertype = $usertype;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}
	

	//Getter
    public function getusertype()
	{
		return $this->usertype;
	}

	public function getactive()
	{
		return $this->active;
	}


	public static function GetAllUserType()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM usertype where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new UserType();

				$Select->setusertype($reader["usertype"]);
				$Select->setactive($reader["active"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public function CustomerDetails($custcode)
	{
		$conn = new Connection();
		
		try {
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM customer WHERE custcode ='" .$custcode."'");

			if ($conn->has_rows($dataset)) {
				$reader = $conn->fetch_array($dataset);
				$this->setcustcode($reader["custcode"]);
				$this->setcustname($reader["custname"]);

			}


			$conn->close();
		} catch (Exception $e) {
		}
		
	}



}

?>