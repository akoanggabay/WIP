<?php
include_once("connection.php");

class IntLotno {
    private $intlotno;
	private $custlotno;
    private $po;
    private $currqty;
    private $station;
    private $status;
    private $starttime;
    private $lastupdate;
    private $lastupdatedby;

	


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

    public static function TicketNumber($date)
	{
		$conn = new Connection();
		$result = '';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM ticket where ticketno like '".$date."%' order by ticketno desc");

			if ($conn->has_rows($dataset)) {

				$reader = $conn->fetch_array($dataset);
				$ticketno = explode("-",$reader["ticketno"]);
				$result = sprintf("%04d",$ticketno[1]+1);
			} else {
				$result = sprintf("%04d",1);
			}

			$conn->close();
		} catch (Exception $e) {
		}
		return $result;
	}
?>