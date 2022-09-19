<?php
include_once("connection.php");

class efai004 {
    private $custcode;
	private $intlot;
    private $machine;
    private $faicat;
    private $wswr;
    private $swrno;
	private $wafersize;
    private $slotting;
    private $chucktablecleaning;
    private $processmode;
    private $bgtapetype;
    private $bgtapeused;
    private $bgtapestaging;
    private $tabletemp;
	private $chucktablevacuumpressure;
    private $uvlight;
    private $changedetapetape;
    private $detapingtapeused;
    private $detapingtapelotno;
    private $detapingtapeexpdate;
    private $notchtype;
    private $setupwafer;
    private $firstwaferinspection;
    private $firstwaferno;
    private $detapingtaperoller;
    private $detapingtapeinstallation;
    private $tapewindingpressure;
    private $tapedeliverypressure;
    private $lamphourusage;
	private $chuckplatebaseheight;
    private $techemp;
    private $qcemp;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
    private $uvirrad;
	


	function __construct(){

	}

	//setter

    public function setcustcode($custcode)
	{
		$this->custcode = $custcode;
	}

	public function setintlot($intlot)
	{
		$this->intlot = $intlot;
	}

    public function setmachine($machine)
	{
		$this->machine = $machine;
	}

    public function setfaicat($faicat)
	{
		$this->faicat = $faicat;
	}

    public function setwswr($wswr)
	{
		$this->wswr = $wswr;
	}

    public function setswrno($swrno)
	{
		$this->swrno = $swrno;
	}

	public function setwafersize($wafersize)
	{
		$this->wafersize = $wafersize;
	}

    public function setslotting($slotting)
	{
		$this->slotting = $slotting;
	}

    public function setchucktablecleaning($chucktablecleaning)
	{
		$this->chucktablecleaning = $chucktablecleaning;
	}

    public function setprocessmode($processmode)
	{
		$this->processmode = $processmode;
	}

    public function setbgtapetype($bgtapetype)
	{
		$this->bgtapetype = $bgtapetype;
	}

    public function setbgtapeused($bgtapeused)
	{
		$this->bgtapeused = $bgtapeused;
	}

    public function setbgtapestaging($bgtapestaging)
	{
		$this->bgtapestaging = $bgtapestaging;
	}

    public function settabletemp($tabletemp)
	{
		$this->tabletemp = $tabletemp;
	}

	public function setchucktablevacuumpressure($chucktablevacuumpressure)
	{
		$this->chucktablevacuumpressure = $chucktablevacuumpressure;
	}

    public function setuvlight($uvlight)
	{
		$this->uvlight = $uvlight;
	}

    public function setchangedetapetape($changedetapetape)
	{
		$this->changedetapetape = $changedetapetape;
	}

    public function setdetapingtapeused($detapingtapeused)
	{
		$this->detapingtapeused = $detapingtapeused;
	}

    public function setdetapingtapelotno($detapingtapelotno)
	{
		$this->detapingtapelotno = $detapingtapelotno;
	}

    public function setdetapingtapeexpdate($detapingtapeexpdate)
	{
		$this->detapingtapeexpdate = $detapingtapeexpdate;
	}

    public function setnotchtype($notchtype)
	{
		$this->notchtype = $notchtype;
	}

    public function setsetupwafer($setupwafer)
	{
		$this->setupwafer = $setupwafer;
	}

    public function setfirstwaferinspection($firstwaferinspection)
	{
		$this->firstwaferinspection = $firstwaferinspection;
	}

    public function setfirstwaferno($firstwaferno)
	{
		$this->firstwaferno = $firstwaferno;
	}

    public function setdetapingtaperoller($detapingtaperoller)
	{
		$this->detapingtaperoller = $detapingtaperoller;
	}

    public function setdetapingtapeinstallation($detapingtapeinstallation)
	{
		$this->detapingtapeinstallation = $detapingtapeinstallation;
	}

    public function settapewindingpressure($tapewindingpressure)
	{
		$this->tapewindingpressure = $tapewindingpressure;
	}

    public function settapedeliverypressure($tapedeliverypressure)
	{
		$this->tapedeliverypressure = $tapedeliverypressure;
	}

    public function setlamphourusage($lamphourusage)
	{
		$this->lamphourusage = $lamphourusage;
	}

	public function setchuckplatebaseheight($chuckplatebaseheight)
	{
		$this->chuckplatebaseheight = $chuckplatebaseheight;
	}

    public function settechemp($techemp)
	{
		$this->techemp = $techemp;
	}

    public function setqcemp($qcemp)
	{
		$this->qcemp = $qcemp;
	}

    public function setremarks($remarks)
	{
		$this->remarks = $remarks;
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

	public function setuvirrad($uvirrad)
	{
		$this->uvirrad = $uvirrad;
	}
	

	//Getter

    public function getcustcode()
	{
		return $this->custcode;
	}

	public function getintlot()
	{
		return $this->intlot;
	}

    public function getmachine()
	{
		return $this->machine;
	}

    public function getfaicat()
	{
		return $this->faicat;
	}

    public function getwswr()
	{
		return $this->wswr;
	}

    public function getswrno()
	{
		return $this->swrno;
	}

	public function getwafersize()
	{
		return $this->wafersize;
	}

    public function getslotting()
	{
		return $this->slotting;
	}

    public function getchucktablecleaning()
	{
		return $this->chucktablecleaning;
	}

    public function getprocessmode()
	{
		return $this->processmode;
	}

    public function getbgtapetype()
	{
		return $this->bgtapetype;
	}

    public function getbgtapeused()
	{
		return $this->bgtapeused;
	}

    public function getbgtapestaging()
	{
		return $this->bgtapestaging;
	}

    public function gettabletemp()
	{
		return $this->tabletemp;
	}

	public function getchucktablevacuumpressure()
	{
		return $this->chucktablevacuumpressure;
	}

    public function getuvlight()
	{
		return $this->uvlight;
	}

    public function getchangedetapetape()
	{
		return $this->changedetapetape;
	}

    public function getdetapingtapeused()
	{
		return $this->detapingtapeused;
	}

    public function getdetapingtapelotno()
	{
		return $this->detapingtapelotno;
	}

    public function getdetapingtapeexpdate()
	{
		return $this->detapingtapeexpdate;
	}

    public function getnotchtype()
	{
		return $this->notchtype;
	}

    public function getsetupwafer()
	{
		return $this->setupwafer;
	}

    public function getfirstwaferinspection()
	{
		return $this->firstwaferinspection;
	}

    public function getfirstwaferno()
	{
		return $this->firstwaferno;
	}

    public function getdetapingtaperoller()
	{
		return $this->detapingtaperoller;
	}

    public function getdetapingtapeinstallation()
	{
		return $this->detapingtapeinstallation;
	}

    public function gettapewindingpressure()
	{
		return $this->tapewindingpressure;
	}

    public function gettapedeliverypressure()
	{
		return $this->tapedeliverypressure;
	}

    public function getlamphourusage()
	{
		return $this->lamphourusage;
	}

	public function getchuckplatebaseheight()
	{
		return $this->chuckplatebaseheight;
	}

    public function gettechemp()
	{
		return $this->techemp;
	}

    public function getqcemp()
	{
		return $this->qcemp;
	}

    public function getremarks()
	{
		return $this->remarks;
	}

    public function getlastupdate()
	{
		return $this->lastupdate;
	}

    public function getlastupdatedby()
	{
		return $this->lastupdatedby;
	}

    public function getactive()
	{
		return $this->active;
	}

    public function getuvirrad()
	{
		return $this->uvirrad;
	}

    public function AddeFAI004(){
		$conn = new Connection();
        $success = true;
		try{
			$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $conn->query("INSERT INTO dbo.efai004 (custcode,intlot,machine,faicat,wswr,swrno,slotting,chucktablecleaning,processmode,bgtapetype,
            bgtapeused,bgtapestaging,tabletemp,uvlight,changedetapetape,detapingtapeused,detapingtapelotno,detapingtapeexpdate,notchtype,setupwafer,
            firstwaferinspection,firstwaferno,detapingtaperoller,detapingtapeinstallation,tapewindingpressure,tapedeliverypressure,lamphourusage,techemp,qcemp,remarks,
            lastupdate,lastupdatedby,active,uvirrad,wafersize,chucktablevacuumpressure,chuckplatebaseheight) VALUES('".$this->getcustcode()."','".$this->getintlot()."','".$this->getmachine()."','".$this->getfaicat()."','".$this->getwswr()."','".$this->getswrno()."','".$this->getslotting()."','".$this->getchucktablecleaning()."','".$this->getprocessmode()."','".$this->getbgtapetype()."','".$this->getbgtapeused()."','".$this->getbgtapestaging()."','".$this->gettabletemp()."','".$this->getuvlight()."','".$this->getchangedetapetape()."','".$this->getdetapingtapeused()."','".$this->getdetapingtapelotno()."','".$this->getdetapingtapeexpdate()."','".$this->getnotchtype()."','".$this->getsetupwafer()."','".$this->getfirstwaferinspection()."','".$this->getfirstwaferno()."','".$this->getdetapingtaperoller()."','".$this->getdetapingtapeinstallation()."','".$this->gettapewindingpressure()."','".$this->gettapedeliverypressure()."','".$this->getlamphourusage()."','".$this->gettechemp()."','".$this->getqcemp()."','".$this->getremarks()."',GETDATE(),'".$this->getlastupdatedby()."',1,'".$this->getuvirrad()."','".$this->getwafersize()."','".$this->getchucktablevacuumpressure()."','".$this->getchuckplatebaseheight()."')");
            /* $params = array($this->getcustcode(),$this->getintlot(),$this->getmachine(),$this->getfaicat(),$this->getwswr(),$this->getswrno(),$this->getwafercondition(),$this->getwafertype(),$this->getwaferboatslotting(),$this->getchucktabletype(),
            $this->getchucktablecleaning(),$this->getprocessmode(),$this->getchangetape(),$this->getbgtapetype(),$this->getbgtapeused(),$this->getbgtapelotno(),$this->getbgtapeexpdate(),$this->getnotchtype(),$this->getchangeblade(),$this->getbladetemp(),
            $this->getbladecount(),$this->getsetupwafer(),$this->getfirstwaferinspection(),$this->getfirstwaferno(),$this->getmpchucktablecleaning(),$this->getmpbgtapeinstallation(),$this->getmpbgtaperollercleaning(),$this->getmpbladeposition(),$this->getmplamphourusage(),$this->getmptechemp(),
            $this->getmpqcemp(),$this->getremarks(),date("Y-m-d h:i:sa"),$this->getlastupdatedby(),1);
            $stmt = sqlsrv_query( $con, $sql, $params);
            $row = sqlsrv_rows_affected($stmt);
            if($row == true)
            {
                $success = true;
            }
            else
            {
                $success = false;
            } */
			
			$conn->close();
		}catch(Exception $e){
            $success = false;
		}
        return $success;	
	}

}

?>