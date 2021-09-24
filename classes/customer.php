<?php
include_once("connection.php");

class Customer {
    private $custcode;
	private $custname;
	


	function __construct(){

	}

	//setter
    
	public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setcustname($custname)
	{
		$this->custname = $custname;
	}
	

	//Getter
    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getcustname()
	{
		return $this->custname;
	}


	public static function GetAllCustomer()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM customer where active = 1 order by custname asc");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Customer();

				$Select->setcustcode($reader["custcode"]);
				$Select->setcustname($reader["custname"]);
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