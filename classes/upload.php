<?php
include_once("connection.php");

class Upload {
    private $custcode;
	private $custlotno;
    private $deviceno;
    private $qty;
    private $waferqty;
    private $datestart;
	private $shipbackdate;
    private $waferthickness;
    private $requiredthickness;
    private $processcat;
    private $lottype;
    private $dateupload;
    private $uploadby;
    private $status;
	


	function __construct(){

	}

	//setter

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setcustlotno($custlotno)
	{
		$this->custlotno = $custlotno;
	}

    public function setdeviceno($deviceno)
	{
		$this->deviceno = $deviceno;
	}

    public function setqty($qty)
	{
		$this->qty = $qty;
	}

    public function setwaferqty($waferqty)
	{
		$this->waferqty = $waferqty;
	}

    public function setdatestart($datestart)
	{
		$this->datestart = $datestart;
	}

	public function setshipbackdate($shipbackdate)
	{
		$this->shipbackdate = $shipbackdate;
	}

    public function setwaferthickness($waferthickness)
	{
		$this->waferthickness = $waferthickness;
	}

    public function setrequiredthickness($requiredthickness)
	{
		$this->requiredthickness = $requiredthickness;
	}

    public function setprocesscat($processcat)
	{
		$this->processcat = $processcat;
	}

    public function setlottype($lottype)
	{
		$this->lottype = $lottype;
	}

    public function setdateupload($dateupload)
	{
		$this->dateupload = $dateupload;
	}

    public function setuploadby($uploadby)
	{
		$this->uploadby = $uploadby;
	}

    public function setstatus($status)
	{
		$this->status = $status;
	}
	

	//Getter
    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getcustlotno()
	{
		return $this->custlotno;
	}

    public function getdeviceno()
	{
		return $this->deviceno;
	}

    public function getqty()
	{
		return $this->qty;
	}

    public function getwaferqty()
	{
		return $this->waferqty;
	}

    public function getdatestart()
	{
		return $this->datestart;
	}

	public function getshipbackdate()
	{
		return $this->shipbackdate;
	}

    public function getwaferthickness()
	{
		return $this->waferthickness;
	}

    public function getrequiredthickness()
	{
		return $this->requiredthickness;
	}

    public function getprocesscat()
	{
		return $this->processcat;
	}

    public function getlottype()
	{
		return $this->lottype;
	}

    public function getdateupload()
	{
		return $this->dateupload;
	}

    public function getuploadby()
	{
		return $this->uploadby;
	}

    public function getstatus()
	{
		return $this->status;
	}

    public static function checkExist($custcode,$custlono)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM custlotno WHERE custcode ='" . $custcode . "' and custlotno = '".$custlono."'");

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

    public function AddCustlotno(){
		$conn = new Connection();
        $success = true;
		try{
			/* $conn->open();
			$result = $conn->query("INSERT INTO dbo.custlotno (custcode,custlotno,deviceno,qty,waferqty,datestart,shipbackdate,waferthickness,requiredthickness,processcat,lottype,dateupload,uploadby,status) VALUES('".$this->getcustcode()."','".$this->getcustlotno()."','".$this->getdeviceno()."','".$this->getqty()."','".$this->getwaferqty()."','".$this->getdatestart()."','".$this->getshipbackdate()."','".$this->getwaferthickness()."','".$this->getrequiredthickness()."','".$this->getprocesscat()."','".$this->getlottype()."',GETDATE(),'".$this->getuploadby()."','".$this->getstatus()."')"); */
			
            $con = $conn->open();
            $sql = "INSERT INTO dbo.custlotno (custcode,custlotno,deviceno,qty,waferqty,datestart,shipbackdate,waferthickness,requiredthickness,processcat,lottype,dateupload,uploadby,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getcustlotno(),$this->getdeviceno(),$this->getqty(),$this->getwaferqty(),$this->getdatestart(),$this->getshipbackdate(),$this->getwaferthickness(),$this->getrequiredthickness(),$this->getprocesscat(),$this->getlottype(),date("Y-m-d h:i:sa"),$this->getuploadby(),$this->getstatus());
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