<?php
include_once("connection.php");

class ForUnits {
    private $id;
	private $custcode;
	private $qty;
	


	function __construct(){

	}

	//setter
    
	public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setid($id)
	{
		$this->id = $id;
	}

	public function setqty($qty)
	{
		$this->qty = $qty;
	}
	

	//Getter
    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getid()
	{
		return $this->id;
	}

	public function getqty()
	{
		return $this->qty;
	}

    public static function checkExist($custcode)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.forunits WHERE ccode ='" .$custcode."' and active = 1");

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

	public function GetDetails($custcode){
	
	$conn = new Connection();

			try{
				$conn->open();
				$dataset = $conn->query("SELECT * FROM dbo.forunits where ccode = '".$custcode."' and active ='1'");

				if ($conn->has_rows($dataset)){
					$reader = $conn->fetch_array($dataset);

					$this->setcustcode($reader['ccode']);
					$this->setqty($reader['qty']);
				}
				$conn->close();
			}catch(Exception $e){

			}

	}



}

?>