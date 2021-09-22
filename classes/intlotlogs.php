<?php
include_once("connection.php");

class IntLotLogs {
    private $trackingno;
	private $custcode;
    private $intlot;
    private $station;
    private $machine;
    private $qtyin;
    private $qtyout;
    private $datein;
    private $dateout;
    private $lastupdatedby;
    private $status;
	private $waferno;
	private $waferrun;
	private $remarks;
	


	function __construct(){

	}

	//setter
    
	public function settrackingno($trackingno)
	{
		$this->trackingno = $trackingno;
	}

	public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

    public function setintlot($intlot)
	{
		$this->intlot = $intlot;
	}

    public function setstation($station)
	{
		$this->station = $station;
	}

    public function setmachine($machine)
	{
		$this->machine = $machine;
	}

    public function setqtyin($qtyin)
	{
		$this->qtyin = $qtyin;
	}

    public function setqtyout($qtyout)
	{
		$this->qtyout = $qtyout;
	}

    public function setdatein($datein)
	{
		$this->datein = $datein;
	}

    public function setdateout($dateout)
	{
		$this->dateout = $dateout;
	}

    public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}

    public function setstatus($status)
	{
		$this->status = $status;
	}

	public function setwaferno($waferno)
	{
		$this->waferno = $waferno;
	}

	public function setwaferrun($waferrun)
	{
		$this->waferrun = $waferrun;
	}

	public function setremarks($remarks)
	{
		$this->remarks = $remarks;
	}
	

	//Getter
    public function gettrackingno()
	{
		return $this->trackingno;
	}

	public function getcustcode()
	{
		return $this->custcode;
	}

    public function getintlot()
	{
		return $this->intlot;
	}

    public function getstation()
	{
		return $this->station;
	}

    public function getmachine()
	{
		return $this->machine;
	}

    public function getqtyin()
	{
		return $this->qtyin;
	}

    public function getqtyout()
	{
		return $this->qtyout;
	}

    public function getdatein()
	{
		return $this->datein;
	}

    public function getdateout()
	{
		return $this->dateout;
	}

    public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}

    public function getstatus()
	{
		return $this->status;
	}

	public function getwaferno()
	{
		return $this->waferno;
	}

	public function getwaferrun()
	{
		return $this->waferrun;
	}

	public function getremarks()
	{
		return $this->remarks;
	}


    public function AddIntLotLogs(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.intlotlogs (custcode,intlot,station,machine,qtyin,datein,lastupdatedby,status,waferno,waferrun) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getstation(),$this->getmachine(),$this->getqtyin(),$this->getdatein(),$this->getlastupdatedby(),$this->getstatus(),$this->getwaferno(),$this->getwaferrun());
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

	public static function GetDetails($intlot,$station)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,b.fname,b.lname 
			from intlotlogs a inner join users b on a.lastupdatedby = b.idno where a.intlot = '".$intlot."' and a.station = '".$station."' and a.status = 'ON PROCESS'");
			if ($conn->has_rows($dataset)) {
				$row = $conn->fetch_array($dataset);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlot'   => $row["intlot"],
				'station'   => $row["station"],
				'machine'   => $row["machine"],
				'qtyin'   => $row["qtyin"],
				//'qtyout'   => $row["qtyout"],
				'datein'   => $row["datein"]->format('F j, Y, g:i:m a'),
				//'dateout'   => $row["dateout"]->format('F j, Y, g:i a'),
				'lastupdatedby'   => $row["lastupdatedby"],
				'status'   => $row["status"],
				'waferno'   => $row["waferno"],
				'waferrun'   => $row["waferrun"],
				'name'   => $row["fname"].' '.$row["lname"]
				
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

	public function DoneInspect($status,$qtyout,$custcode,$intlotno,$station,$remarks){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotlogs SET status = '".$status."',qtyout='".$qtyout."',dateout= GETDATE(),remarks='".$remarks."' where custcode ='".$custcode."' and intlot = '".$intlotno."' and station = '".$station."' and status = 'ON PROCESS'");

			$conn->close();
		}catch(Exception $e){

		}
	}

	public static function GetAllIntLogs($intlotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,b.description,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,a.remarks FROM dbo.intlotlogs a inner join station b on a.station = b.station  where a.intlot = '".$intlotno."' order by datein desc");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				$do;
				$qo;
				$remarks = '';
				$user = new User;
				
				while ($row = $conn->fetch_array($dataset)) {
				if($row["dateout"] != '' || !empty($row["dateout"]))
				{
					$do = @$row["dateout"]->format('F j, Y g:i:m a');
				}
				else
				{
					$do = '';
				}

				if($row["qtyout"] != '' || !empty($row["qtyout"]))
				{
					$qo = $row["qtyout"];
				}
				else
				{
					$qo = '';
				}

				if($row["remarks"] != '' || !empty($row["remarks"]))
				{
					$remarks = @$row["remarks"];
				}
				else
				{
					$remarks = '';
				}
				$user->UserData($row["lastupdatedby"]);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlot'   => $row["intlot"],
				'station' => $row["station"].':'.$row["description"],
				'machine' => $row["machine"],
				'qtyin' => $row["qtyin"],
				'qtyout' => $qo,
				'datein' => $row["datein"]->format('F j, Y g:i:m a'),
				'dateout' => $do,
				'lastupdatedby' => $user->getfname().' '.$user->getlname(),
				'status' => $row["status"],
				'waferno' => $row["waferno"],
				'remarks' => $remarks,
				'waferrun' => $row["waferrun"]
				);
				}
			}
			else
			{
				$result = 'false';
			}
		
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function GetAllIntLogsReports($start,$end)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,b.description,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun FROM dbo.intlotlogs a inner join station b on a.station = b.station  where a.datein between '".$start."' and '".$end."' order by intlot,datein desc");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				$do;
				$qo;
				$user = new User;
				
				while ($row = $conn->fetch_array($dataset)) {
				if($row["dateout"] != '' || !empty($row["dateout"]))
				{
					$do = @$row["dateout"]->format('F j, Y g:i:m a');
				}
				else
				{
					$do = '';
				}

				if($row["qtyout"] != '' || !empty($row["qtyout"]))
				{
					$qo = $row["qtyout"];
				}
				else
				{
					$qo = '';
				}
				$user->UserData($row["lastupdatedby"]);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlot'   => $row["intlot"],
				'station' => $row["station"].':'.$row["description"],
				'machine' => $row["machine"],
				'qtyin' => $row["qtyin"],
				'qtyout' => $qo,
				'datein' => $row["datein"]->format('F j, Y g:i:m a'),
				'dateout' => $do,
				'lastupdatedby' => $user->getfname().' '.$user->getlname(),
				'status' => $row["status"],
				'waferno' => $row["waferno"],
				'waferrun' => $row["waferrun"]
				);
				}
			}
			else
			{
				$result = 'false';
			}
		
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}



}

?>