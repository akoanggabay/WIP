<?php
include_once("connection.php");

class PO {
    private $pono;
    private $custcode;
	private $qty;
    private $processcat;
    private $subprocesscat;
    private $status;
    private $lastupdate;
	private $lastupdatedby;
    private $active;
	


	function __construct(){

	}

	//setter
    
	public function setpono($pono)
	{
		$this->pono = $pono;
	}

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setqty($qty)
	{
		$this->qty = $qty;
	}

    public function setprocesscat($processcat)
	{
		$this->processcat = $processcat;
	}

    public function setsubprocesscat($subprocesscat)
	{
		$this->subprocesscat = $subprocesscat;
	}

    public function setstatus($status)
	{
		$this->status = $status;
	}

    public function setlastupdate($lastupdate)
	{
		$this->lastupdate = $lastupdate;
	}

	public function setactive($active)
	{
		$this->active = $active;
	}

    public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}
	

	//Getter
    public function getpono()
	{
		return $this->pono;
	}

    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getqty()
	{
		return $this->qty;
	}

    public function getprocesscat()
	{
		return $this->processcat;
	}

    public function getsubprocesscat()
	{
		return $this->subprocesscat;
	}

    public function getstatus()
	{
		return $this->status;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

	public function getactive()
	{
		return $this->active;
	}

    public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}

    public static function checkExist($custcode,$pono)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM PO WHERE custcode ='" . $custcode . "' and pono = '".$pono."'");

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

    public static function ViewDocument($docid)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM document where docid ='".$docid."' and active = 1");

            foreach($dataset as $row)
            {
            $result[] = array(
            'docid'   => $row["docid"],
            'title'   => $row["title"],
			'dtype'   => $row["dtype"],
            'active'   => $row["active"],
            'filename'   => $row["filename"],
			'file' => $row["file"],
			'uploadedby' => $row["uploadedby"]
            );
            }
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

    public static function GetAllDocs()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM document where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new Doc();

				$Select->setdocid($reader["docid"]);
				$Select->settitle($reader["title"]);
                $Select->setdtype($reader["dtype"]);
                $Select->setfilename($reader["filename"]);
                $Select->setfile($reader["file"]);
                $Select->setuploadedby($reader["uploadedby"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

    public function AddPO(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?)";
            $params = array($this->getpono(),$this->getcustcode(),$this->getqty(),$this->getprocesscat(),$this->getsubprocesscat(),$this->getstatus(),date("Y-m-d h:i:sa"),$this->getlastupdatedby(),1);
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



}

?>