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
	private $cassno;
	


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

	public function setcassno($cassno)
	{
		$this->cassno = $cassno;
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

	public function getcassno()
	{
		return $this->cassno;
	}


    public function AddIntLotLogs(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.intlotlogs (custcode,intlot,station,machine,qtyin,datein,lastupdatedby,status,cassno) VALUES(?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getstation(),$this->getmachine(),$this->getqtyin(),$this->getdatein(),$this->getlastupdatedby(),$this->getstatus(),$this->getcassno());
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
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,b.fname,b.lname,a.cassno 
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
				'datein'   => $row["datein"]->format('F j, Y, g:i:s a'),
				//'dateout'   => $row["dateout"]->format('F j, Y, g:i a'),
				'lastupdatedby'   => $row["lastupdatedby"],
				'status'   => $row["status"],
				'waferno'   => $row["waferno"],
				'waferrun'   => $row["waferrun"],
				'cassno'   => $row["cassno"],
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

	public function DoneInspect($status,$qtyout,$custcode,$intlotno,$station,$remarks,$idno){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotlogs SET status = '".$status."',qtyout='".$qtyout."',dateout= GETDATE(),remarks='".$remarks."',lastupdatedby = '".$idno."' where custcode ='".$custcode."' and intlot = '".$intlotno."' and station = '".$station."' and status = 'ON PROCESS'");

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
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,b.description,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,a.remarks,a.cassno FROM dbo.intlotlogs a inner join station b on a.station = b.station  where a.intlot = '".$intlotno."' order by datein asc");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				$do;
				$qo;
				$remarks = '';
				$cassno;
				$user = new User;
				
				while ($row = $conn->fetch_array($dataset)) {
				if($row["dateout"] != '' || !empty($row["dateout"]))
				{
					$do = @$row["dateout"]->format('F j, Y g:i:s a');
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

				if($row["cassno"] != '' || !empty($row["cassno"]))
				{
					$cassno = @$row["cassno"];
				}
				else
				{
					$cassno = '';
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
				'datein' => $row["datein"]->format('F j, Y g:i:s a'),
				'dateout' => $do,
				'lastupdatedby' => $user->getfname().' '.$user->getlname(),
				'status' => $row["status"],
				'waferno' => $row["waferno"],
				'remarks' => $remarks,
				'cassno' => strtoupper($cassno),
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
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,c.custlot,a.station,b.description,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,a.cassno FROM dbo.intlotlogs a inner join station b on a.station = b.station inner join intlotno c on a.intlot = c.intlot  where a.datein between '".$start."' and '".$end."' order by intlot,datein desc");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				include_once("customer.php");
				include_once("intlotno.php");
				$do;
				$qo;
				$cassno;
				$user = new User;
				$cust = new Customer;
				$intlot = new IntLotno;
				
				while ($row = $conn->fetch_array($dataset)) {
				if($row["dateout"] != '' || !empty($row["dateout"]))
				{
					$do = @$row["dateout"]->format('F j, Y g:i:s a');
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

				if($row["cassno"] != '' || !empty($row["cassno"]))
				{
					$cassno = $row["cassno"];
				}
				else
				{
					$cassno = '';
				}
				$user->UserData($row["lastupdatedby"]);
				$cust->CustomerDetails($row["custcode"]);
				$intlot->GetDetails($row["intlot"]);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $cust->getcustname(),
				'intlot'   => $row["intlot"],
				'custlot'   => $row["custlot"],
				'station' => $row["station"].':'.$row["description"],
				'machine' => $row["machine"],
				'qtyin' => $row["qtyin"],
				'qtyout' => $qo,
				'datein' => $row["datein"]->format('F j, Y g:i:s a'),
				'dateout' => $do,
				'lastupdatedby' => $user->getfname().' '.$user->getlname(),
				'status' => $row["status"],
				'waferno' => $row["waferno"],
				'cassno' => strtoupper($cassno),
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

	public static function checkExist($intlotno)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.intlotlogs WHERE intlot ='" .$intlotno."' and status = 'ON PROCESS'");

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

	public static function GetAllIntLogsDone($intlotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,b.description,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,a.remarks,a.cassno FROM dbo.intlotlogs a inner join station b on a.station = b.station  where a.intlot = '".$intlotno."' and a.status in ('DONE','SHIPPED') and a.station !='REG' order by datein asc");
			
				include_once("user.php");
				$do;
				$qo;
				$remarks = '';
				$cassno;
				$user = new User;
				
				while ($row = $conn->fetch_array($dataset)) {
				if($row["dateout"] != '' || !empty($row["dateout"]))
				{
					$do = @$row["dateout"]->format('F j, Y g:i:s a');
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

				if($row["cassno"] != '' || !empty($row["cassno"]))
				{
					$cassno = @$row["cassno"];
				}
				else
				{
					$cassno = '';
				}

				if($row["machine"] != '' || !empty($row["machine"]))
				{
					$machine = @$row["machine"];
				}
				else
				{
					$machine = 'N/A';
				}
				$user->UserData($row["lastupdatedby"]);
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlot'   => $row["intlot"],
				'station' => $row["station"].':'.$row["description"],
				'machine' => $machine,
				'qtyin' => $row["qtyin"],
				'qtyout' => $qo,
				'datein' => $row["datein"]->format('F j, Y g:i:s a'),
				'dateout' => $do,
				'lastupdatedby' => $user->getfname().' '.$user->getlname(),
				'status' => $row["status"],
				'waferno' => $row["waferno"],
				'remarks' => $remarks,
				'cassno' => strtoupper($cassno),
				'waferrun' => $row["waferrun"]
				);
				}
			
		
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function GetAllLogs()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from dbo.intlotlogs order by intlot,datein");
			$counter = 0;
			include_once("station.php");
			include_once("user.php");
			$station = new Station;
			$user = new User;
			$do;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new IntLotLogs();
				if($reader["dateout"] != '' || !empty($reader["dateout"]))
				{
					$do = @$reader["dateout"]->format('F j, Y g:i:s a');
				}
				else
				{
					$do = '';
				}
				$user->UserData($reader["lastupdatedby"]);
				$station->StationDetails($reader["station"]);
				$Select->settrackingno($reader["trackingno"]);
				$Select->setcustcode($reader["custcode"]);
                $Select->setintlot($reader["intlot"]);
				$Select->setstation($station->getstation().':'.$station->getdescription());
				$Select->setqtyin($reader["qtyin"]);
				$Select->setqtyout($reader["qtyout"]);
				$Select->setmachine($reader["machine"]);
                $Select->setdatein($reader["datein"]->format('F j, Y g:i:s a'));
				$Select->setdateout($do);
                $Select->setcassno($reader["cassno"]);
                $Select->setstatus($reader["status"]);
				$Select->setremarks($reader["remarks"]);
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

	public static function TrackGetDetails($trackingno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.trackingno,a.custcode,a.intlot,a.station,a.machine,a.qtyin,a.qtyout,a.datein,a.dateout,a.lastupdatedby,a.status,a.waferno,a.waferrun,b.fname,b.lname,a.cassno 
			from intlotlogs a inner join users b on a.lastupdatedby = b.idno where a.trackingno = '".$trackingno."'");
			if ($conn->has_rows($dataset)) {
				$do;
				$row = $conn->fetch_array($dataset);
				if($row["dateout"] != '' || !empty($row["dateout"]))
				{
					$do = @$row["dateout"]->format('F j, Y g:i:s a');
				}
				else
				{
					$do = '';
				}
				$result[] = array(
				'trackingno'   => $row["trackingno"],
				'custcode'   => $row["custcode"],
				'intlot'   => $row["intlot"],
				'station'   => $row["station"],
				'machine'   => $row["machine"],
				'qtyin'   => $row["qtyin"],
				'qtyout'   => $row["qtyout"],
				'datein'   => $row["datein"]->format('F j, Y, g:i:s a'),
				'dateout'   => $do,
				'lastupdatedby'   => $row["lastupdatedby"],
				'status'   => $row["status"],
				'waferno'   => $row["waferno"],
				'waferrun'   => $row["waferrun"],
				'cassno'   => $row["cassno"],
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



}

?>