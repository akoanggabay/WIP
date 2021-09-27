<?php
include_once("connection.php");

class IntLotno {
	private $custcode;
    private $intlotno;
	private $custlotno;
    private $pono;
	private $origqty;
    private $currqty;
    private $station;
    private $status;
    private $starttime;
    private $lastupdate;
    private $lastupdatedby;
	private $wafersize;
	private $devicetype;
	private $wr;

	function __construct(){

	}

	//setter

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setintlotno($intlotno)
	{
		$this->intlotno = $intlotno;
	}

	public function setcustlotno($custlotno)
	{
		$this->custlotno = $custlotno;
	}

    public function setpono($pono)
	{
		$this->pono = $pono;
	}

    public function setorigqty($origqty)
	{
		$this->origqty = $origqty;
	}

    public function setcurrqty($currqty)
	{
		$this->currqty = $currqty;
	}

	public function setstation($station)
	{
		$this->station = $station;
	}

    public function setstatus($status)
	{
		$this->status = $status;
	}

    public function setstarttime($starttime)
	{
		$this->starttime = $starttime;
	}

    public function setlastupdate($lastupdate)
	{
		$this->lastupdate = $lastupdate;
	}

    public function setlastupdatedby($lastupdatedby)
	{
		$this->lastupdatedby = $lastupdatedby;
	}

	public function setwafersize($wafersize)
	{
		$this->wafersize = $wafersize;
	}

	public function setdevicetype($devicetype)
	{
		$this->devicetype = $devicetype;
	}

	public function setwr($wr)
	{
		$this->wr = $wr;
	}
	

	//Getter
    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getintlotno()
	{
		return $this->intlotno;
	}

	public function getcustlotno()
	{
		return $this->custlotno;
	}

    public function getpono()
	{
		return $this->pono;
	}

    public function getorigqty()
	{
		return $this->origqty;
	}

    public function getcurrqty()
	{
		return $this->currqty;
	}

	public function getstation()
	{
		return $this->station;
	}

    public function getstatus()
	{
		return $this->status;
	}

    public function getstarttime()
	{
		return $this->starttime;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

    public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}

	public function getwafersize()
	{
		return $this->wafersize;
	}

	public function getdevicetype()
	{
		return $this->devicetype;
	}

	public function getwr()
	{
		return $this->wr;
	}

    public static function IntLotNo($date)
	{
		$conn = new Connection();
		$result = '';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.intlotno where intlot like '".$date."%' order by intlot desc");

			if ($conn->has_rows($dataset)) {

				$reader = $conn->fetch_array($dataset);
				$intlot = explode("-",$reader["intlot"]);
				$result = sprintf("%04d",$intlot[1]+1);
			} else {
				$result = sprintf("%04d",1);
			}

			$conn->close();
		} catch (Exception $e) {
		}
		return $result;
	}

	public static function getcountbyPO($code,$po) 
	{
		$conn = new Connection();
		$result = 0;

		try
		{
			$conn->open();
			$dataset = $conn->query("SELECT sum(b.waferqty) as total FROM intlotno a inner join custlotno b on a.custlot = b.custlotno WHERE a.custcode ='".$code."' and a.pono = '".$po."'");
			$counter = 0;

			if ($conn->has_rows($dataset)){
			$reader = $conn->fetch_array($dataset);
			$result = $reader["total"];	
			}else{
			$result = 0;
			}

			$conn->close();
		}
		catch(Exception $e)
		{

		}
		return $result;
	}

	public static function getcountbyPOShipped($code,$po) 
	{
		$conn = new Connection();
		$result = 0;

		try
		{
			$conn->open();
			$dataset = $conn->query("SELECT sum(origqty) as total FROM intlotno WHERE custcode ='".$code."' and pono = '".$po."' and status = 'SHIPPED'");
			$counter = 0;

			if ($conn->has_rows($dataset)){
			$reader = $conn->fetch_array($dataset);
			$result = $reader["total"];	
			}else{
			$result = 0;
			}

			$conn->close();
		}
		catch(Exception $e)
		{

		}
		return $result;
	}

	public function AddIntLotno(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.intlotno (custcode,intlot,custlot,pono,origqty,currqty,status,starttime,station,lastupdate,lastupdatedby,wafersize,devicetype,wr) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlotno(),$this->getcustlotno(),$this->getpono(),$this->getorigqty(),$this->getcurrqty(),$this->getstatus(),date("Y-m-d h:i:sa"),$this->getstation(),date("Y-m-d h:i:sa"),$this->getlastupdatedby(),$this->getwafersize(),$this->getdevicetype(),$this->getwr());
            $stmt = sqlsrv_query( $con, $sql, $params);
            $row = sqlsrv_rows_affected($stmt);
			$success = $row;
            /* if($row == true)
            {
                $success = true;
            }
            else
            {
                $success = false;
            } */
			//$conn->close();
		}catch(Exception $e){
            $success = false;
		}
        return $success;	
	}

	public static function GetDetails($intlot)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT a.custcode,b.deviceno,a.intlot,a.custlot,b.waferqty,b.qty,b.lottype,b.waferthickness,b.requiredthickness,a.pono,b.datestart,b.shipbackdate,a.status,b.processcat,a.wafersize,a.station,a.currqty,a.waferno,a.waferrun,a.brm,a.devicetype,a.wr FROM intlotno a inner join custlotno b on  a.custlot = b.custlotno where a.intlot = '".$intlot."'");
			include_once("station.php");
			include_once("processroute.php");
			$station = new Station;
			$process = new ProcessRoute;
			if ($conn->has_rows($dataset)) {
				$row = $conn->fetch_array($dataset);
				$station->StationDetails($row["station"]);

				$process->setstation($row["station"]);
				$process->setprocess($row["processcat"]);
				$process->getStationDetails();
				$cstation  = $row["station"].':'.$station->getdescription();
				$nextstage = ProcessRoute::getnextstage($process->getprocess(),$process->getflowsequence());

				$station->StationDetails($nextstage);
				if($nextstage == '')
				{
					$nstation = '';
				}
				else
				{
					$nstation = $nextstage.':'.$station->getdescription();
				}
				
				$result[] = array(
				'custcode'   => $row["custcode"],
				'custlot'   => $row["custlot"],
				'deviceno'   => $row["deviceno"],
				'qty'   => $row["qty"],
				'waferqty'   => $row["waferqty"],
				'datestart'   => $row["datestart"]->format('F j, Y'),
				'shipbackdate' => $row["shipbackdate"]->format('F j, Y'),
				'waferthickness' => $row["waferthickness"],
				'requiredthickness' => $row["requiredthickness"],
				'processcat' => $row["processcat"],
				'lottype' => $row["lottype"],
				'status' => $row["status"],
				'station' => $row["station"],
				'wafersize' => $row["wafersize"],
				'currqty' => $row["currqty"],
				'pono' => $row["pono"],
				'cstation' => $cstation,
				'nstation' => $nstation,
				'waferno' => $row["waferno"],
				'waferrun' => $row["waferrun"],
				'brm' => $row["brm"],
				'devicetype' => $row["devicetype"],
				'wr' => $row["wr"],
				'intlot' => $row["intlot"]
				);
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

	public static function GetAllIntLotno($custcode,$processcat)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("select intlot from intlotno a inner join custlotno b on a.custlot = b.custlotno and a.custcode = b.custcode where a.custcode = '".$custcode."' and a.status in ('DONE','ON PROCESS','REG') and b.processcat = '".$processcat."' order by b.datestart");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new IntLotNo();

				$Select->setintlotno($reader["intlot"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public function updateStatus(){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotno SET status = '".$this->getstatus()."' where custcode ='".$this->getcustcode()."' and intlot = '".$this->getintlotno()."'");

			$conn->close();
		}catch(Exception $e){

		}
	}

	public function updateCurrqty($qty){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotno SET currqty = '".$qty."', status ='".$this->getstatus()."',lastupdate = GETDATE() where custcode ='".$this->getcustcode()."' and intlot = '".$this->getintlotno()."'");

			$conn->close();
		}catch(Exception $e){

		}
	}

	public function updateBRM($intlotno,$custcode,$brm){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotno SET brm = '".$brm."' where custcode ='".$custcode."' and intlot = '".$intlotno."'");

			$conn->close();
		}catch(Exception $e){

		}
	}

	public function DoneInspect(){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotno SET status = '".$this->getstatus()."',lastupdate = GETDATE(), lastupdatedby = '".$this->getlastupdatedby()."' ,station = '".$this->getstation()."' where custcode ='".$this->getcustcode()."' and intlot = '".$this->getintlotno()."'");

			$conn->close();
		}catch(Exception $e){

		}
	}

	public static function GetAllHoldLot()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM dbo.intlotno where status = 'HOLD'");
			$counter = 0;
			include_once("user.php");
			$user = new User;

			while($reader = $conn->fetch_array($dataset)){
				$Select = new IntLotno();
				$user->UserData($reader["lastupdatedby"]);
				$Select->setcustcode($reader["custcode"]);
				$Select->setintlotno($reader["intlot"]);
                $Select->setcustlotno($reader["custlot"]);
                $Select->setpono($reader["pono"]);
                $Select->setorigqty($reader["origqty"]);
                $Select->setcurrqty($reader["currqty"]);
				$Select->setstatus($reader["status"]);
				$Select->setstarttime($reader["starttime"]->format('F j, Y g:i:s a'));
				$Select->setstation($reader["station"]);
				$Select->setlastupdatedby($user->getfname().' '.$user->getlname());
				$Select->setwafersize($reader["wafersize"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

	public static function GetAllPOLotno($pono)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT *  from dbo.intlotno where pono = '".$pono."' order by starttime desc");
			if ($conn->has_rows($dataset)) {
				include_once("user.php");
				include_once("customer.php");
				include_once("station.php");
				
				$user = new User;
				$cust = new Customer;
				$station = new Station;
				while ($row = $conn->fetch_array($dataset)) {
				
				$user->UserData($row["lastupdatedby"]);
				$cust->CustomerDetails($row["custcode"]);
				$station->StationDetails($row["station"]);
				$result[] = array(
				'custcode'   => $cust->getcustname(),
				'intlot'   => $row["intlot"],
				'custlot' => $row["custlot"],
				'pono' => $row["pono"],
				'origqty' => $row["origqty"],
				'currqty' => $row["currqty"],
				'status' => $row["status"],
				'starttime' => $row["starttime"]->format('F j, Y g:i:s a'),
				'station' => $row["station"].':'.$station->getdescription(),
				'lastupdate' => $row["lastupdate"]->format('F j, Y g:i:s a'),
				'lastupdatedby' => $user->getfname().' '.$user->getlname(),
				'wafersize' => $row["wafersize"]
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
			$dataset = $conn->query("SELECT * FROM dbo.intlotno WHERE intlot ='" .$intlotno."'");

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

	public function updateWafer($intlotno,$custcode,$waferno,$waferrun){
		$conn = new Connection();

		try{
			$conn->open();
			$conn->query("UPDATE dbo.intlotno SET waferno = '".$waferno."',waferrun='".$waferrun."' where custcode ='".$custcode."' and intlot = '".$intlotno."'");

			$conn->close();
		}catch(Exception $e){

		}
	}
}
?>