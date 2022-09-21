<?php
include_once("connection.php");

class efai002 {
    private $custcode;
	private $intlot;
    private $machine;
    private $faicat;
    private $wswr;
    private $swrno;
	private $wafersize;
    private $wafercondition;
    private $wafertype;
	private $waferboatslotting;
    private $chucktabletype;
    private $chucktablecleaning;
    private $processmode;
    private $changetape;
    private $bgtapetype;
    private $bgtapeused;
    private $bgtapelotno;
    private $bgtapeexpdate;
    private $notchtype;
    private $changeblade;
    private $bladetemp;
    private $bladecount;
    private $setupwafer;
    private $firstwaferinspection;
    private $firstwaferno;
	private $noofwafersinspected;
    private $mpchucktablecleaning;
    private $mpbgtapeinstallation;
    private $mpbgtaperollercleaning;
    private $mpbladeposition;
    private $mplamphourusage;
    private $mptechemp;
    private $mpqcemp;
    private $remarks;
    private $lastupdate;
    private $lastupdatedby;
    private $active;
	


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

    public function setwafercondition($wafercondition)
	{
		$this->wafercondition = $wafercondition;
	}

    public function setwafertype($wafertype)
	{
		$this->wafertype = $wafertype;
	}

    public function setwaferboatslotting($waferboatslotting)
	{
		$this->waferboatslotting = $waferboatslotting;
	}

    public function setchucktabletype($chucktabletype)
	{
		$this->chucktabletype = $chucktabletype;
	}

    public function setchucktablecleaning($chucktablecleaning)
	{
		$this->chucktablecleaning = $chucktablecleaning;
	}

    public function setprocessmode($processmode)
	{
		$this->processmode = $processmode;
	}

    public function setchangetape($changetape)
	{
		$this->changetape = $changetape;
	}

    public function setbgtapetype($bgtapetype)
	{
		$this->bgtapetype = $bgtapetype;
	}

    public function setbgtapeused($bgtapeused)
	{
		$this->bgtapeused = $bgtapeused;
	}

    public function setbgtapelotno($bgtapelotno)
	{
		$this->bgtapelotno = $bgtapelotno;
	}

    public function setbgtapeexpdate($bgtapeexpdate)
	{
		$this->bgtapeexpdate = $bgtapeexpdate;
	}

    public function setnotchtype($notchtype)
	{
		$this->notchtype = $notchtype;
	}

    public function setchangeblade($changeblade)
	{
		$this->changeblade = $changeblade;
	}

    public function setbladetemp($bladetemp)
	{
		$this->bladetemp = $bladetemp;
	}

    public function setbladecount($bladecount)
	{
		$this->bladecount = $bladecount;
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

	public function setnoofwafersinspected($noofwafersinspected)
	{
		$this->noofwafersinspected = $noofwafersinspected;
	}

    public function setmpchucktablecleaning($mpchucktablecleaning)
	{
		$this->mpchucktablecleaning = $mpchucktablecleaning;
	}

    public function setmpbgtapeinstallation($mpbgtapeinstallation)
	{
		$this->mpbgtapeinstallation = $mpbgtapeinstallation;
	}

    public function setmpbgtaperollercleaning($mpbgtaperollercleaning)
	{
		$this->mpbgtaperollercleaning = $mpbgtaperollercleaning;
	}

    public function setmpbladeposition($mpbladeposition)
	{
		$this->mpbladeposition = $mpbladeposition;
	}

    public function setmplamphourusage($mplamphourusage)
	{
		$this->mplamphourusage = $mplamphourusage;
	}

    public function setmptechemp($mptechemp)
	{
		$this->mptechemp = $mptechemp;
	}

    public function setmpqcemp($mpqcemp)
	{
		$this->mpqcemp = $mpqcemp;
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

    public function getwafercondition()
	{
		return $this->wafercondition;
	}

    public function getwafertype()
	{
		return $this->wafertype;
	}

    public function getwaferboatslotting()
	{
		return $this->waferboatslotting;
	}

    public function getchucktabletype()
	{
		return $this->chucktabletype;
	}

    public function getchucktablecleaning()
	{
		return $this->chucktablecleaning;
	}

    public function getprocessmode()
	{
		return $this->processmode;
	}

    public function getchangetape()
	{
		return $this->changetape;
	}

    public function getbgtapetype()
	{
		return $this->bgtapetype;
	}

    public function getbgtapeused()
	{
		return $this->bgtapeused;
	}

    public function getbgtapelotno()
	{
		return $this->bgtapelotno;
	}

    public function getbgtapeexpdate()
	{
		return $this->bgtapeexpdate;
	}

    public function getnotchtype()
	{
		return $this->notchtype;
	}

    public function getchangeblade()
	{
		return $this->changeblade;
	}

    public function getbladetemp()
	{
		return $this->bladetemp;
	}

    public function getbladecount()
	{
		return $this->bladecount;
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

	public function getnoofwafersinspected()
	{
		return $this->noofwafersinspected;
	}

    public function getmpchucktablecleaning()
	{
		return $this->mpchucktablecleaning;
	}

    public function getmpbgtapeinstallation()
	{
		return $this->mpbgtapeinstallation;
	}

    public function getmpbgtaperollercleaning()
	{
		return $this->mpbgtaperollercleaning;
	}

    public function getmpbladeposition()
	{
		return $this->mpbladeposition;
	}

    public function getmplamphourusage()
	{
		return $this->mplamphourusage;
	}

    public function getmptechemp()
	{
		return $this->mptechemp;
	}

    public function getmpqcemp()
	{
		return $this->mpqcemp;
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

    public function AddeFAI002(){
		$conn = new Connection();
        $success = true;
		try{
			$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $conn->query("INSERT INTO dbo.efai002 (custcode,intlot,machine,faicat,wswr,swrno,wafercondition,wafertype,waferboatslotting,chucktabletype,
            chucktablecleaning,processmode,changetape,bgtapetype,bgtapeused,bgtapelotno,bgtapeexpdate,notchtype,changeblade,bladetemp,
            bladecount,setupwafer,firstwaferinspection,firstwaferno,mpchucktablecleaning,mpbgtapeinstallation,mpbgtaperollercleaning,mpbladeposition,mplamphourusage,mptechemp,
            mpqcemp,remarks,lastupdate,lastupdatedby,active,wafersize,noofwafersinspected) VALUES('".$this->getcustcode()."','".$this->getintlot()."','".$this->getmachine()."','".$this->getfaicat()."','".$this->getwswr()."','".$this->getswrno()."','".$this->getwafercondition()."','".$this->getwafertype()."','".$this->getwaferboatslotting()."','".$this->getchucktabletype()."','".$this->getchucktablecleaning()."','".$this->getprocessmode()."','".$this->getchangetape()."','".$this->getbgtapetype()."','".$this->getbgtapeused()."','".$this->getbgtapelotno()."','".$this->getbgtapeexpdate()."','".$this->getnotchtype()."','".$this->getchangeblade()."','".$this->getbladetemp()."','".$this->getbladecount()."','".$this->getsetupwafer()."','".$this->getfirstwaferinspection()."','".$this->getfirstwaferno()."','".$this->getmpchucktablecleaning()."','".$this->getmpbgtapeinstallation()."','".$this->getmpbgtaperollercleaning()."','".$this->getmpbladeposition()."','".$this->getmplamphourusage()."','".$this->getmptechemp()."','".$this->getmpqcemp()."','".$this->getremarks()."',GETDATE(),'".$this->getlastupdatedby()."',1,'".$this->getwafersize()."','".$this->getnoofwafersinspected()."')");
            /* $params = array($this->getcustcode(),$this->getintlot(),$this->getmachine(),$this->getfaicat(),$this->getwswr(),$this->getswrno(),$this->getwafercondition(),$this->getwafertype(),$this->getwaferboatslotting(),$this->getchucktabletype(),
            $this->getchucktablecleaning(),$this->getprocessmode(),$this->getchangetape(),$this->getbgtapetype(),$this->getbgtapeused(),$this->getbgtapelotno(),$this->getbgtapeexpdate(),$this->getnotchtype(),$this->getchangeblade(),$this->getbladetemp(),
            $this->getbladecount(),$this->getsetupwafer(),$this->getfirstwaferinspection(),$this->getfirstwaferno(),$this->getmpchucktablecleaning(),$this->getmpbgtapeinstallation(),$this->getmpbgtaperollercleaning(),$this->getmpbladeposition(),$this->getmplamphourusage(),$this->getmptechemp(),
            $this->getmpqcemp(),$this->getremarks(),date("Y-m-d H:i:sa"),$this->getlastupdatedby(),1);
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