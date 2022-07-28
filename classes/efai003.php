<?php
include_once("connection.php");

class efai003 {
    private $custcode;
	private $intlot;
    private $machine;
    private $faicat;
    private $wswr;
    private $swrno;
    private $recipeno;
    private $wtaperequiredfinalthickness;
	private $wtapeinitialthickness;
    private $slottingoncassette;
    private $processmode;
    private $bgtapetype;
    private $bgtapeused;
    private $bgtapethickness;
    private $bgtapestaged;
    private $diwatertemp;
    private $grindingwheel;
    private $grindingwheelusabletooth;
    private $aircut;
    private $spindlerpm;
    private $feedratep1;
    private $feedratep2;
    private $feedratep3;
    private $chucktableseedp1;
    private $chucktableseedp2;
    private $chucktableseedp3;
    private $setupwafer;
    private $firstwaferinspection;
    private $firstwaferno;
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

    public function setrecipeno($recipeno)
	{
		$this->recipeno = $recipeno;
	}

    public function setwtaperequiredfinalthickness($wtaperequiredfinalthickness)
	{
		$this->wtaperequiredfinalthickness = $wtaperequiredfinalthickness;
	}

    public function setwtapeinitialthickness($wtapeinitialthickness)
	{
		$this->wtapeinitialthickness = $wtapeinitialthickness;
	}

    public function setslottingoncassette($slottingoncassette)
	{
		$this->slottingoncassette = $slottingoncassette;
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

    public function setbgtapethickness($bgtapethickness)
	{
		$this->bgtapethickness = $bgtapethickness;
	}

    public function setbgtapestaged($bgtapestaged)
	{
		$this->bgtapestaged = $bgtapestaged;
	}

    public function setdiwatertemp($diwatertemp)
	{
		$this->diwatertemp = $diwatertemp;
	}

    public function setgrindingwheel($grindingwheel)
	{
		$this->grindingwheel = $grindingwheel;
	}

    public function setgrindingwheelusabletooth($grindingwheelusabletooth)
	{
		$this->grindingwheelusabletooth = $grindingwheelusabletooth;
	}

    public function setaircut($aircut)
	{
		$this->aircut = $aircut;
	}

    public function setspindlerpm($spindlerpm)
	{
		$this->spindlerpm = $spindlerpm;
	}

    public function setfeedratep1($feedratep1)
	{
		$this->feedratep1 = $feedratep1;
	}

    public function setfeedratep2($feedratep2)
	{
		$this->feedratep2 = $feedratep2;
	}

    public function setfeedratep3($feedratep3)
	{
		$this->feedratep3 = $feedratep3;
	}

    public function setchucktableseedp1($chucktableseedp1)
	{
		$this->chucktableseedp1 = $chucktableseedp1;
	}

    public function setchucktableseedp2($chucktableseedp2)
	{
		$this->chucktableseedp2 = $chucktableseedp2;
	}

    public function setchucktableseedp3($chucktableseedp3)
	{
		$this->chucktableseedp3 = $chucktableseedp3;
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

    public function getrecipeno()
	{
		return $this->recipeno;
	}

    public function getwtaperequiredfinalthickness()
	{
		return $this->wtaperequiredfinalthickness;
	}

    public function getwtapeinitialthickness()
	{
		return $this->wtapeinitialthickness;
	}

    public function getslottingoncassette()
	{
		return $this->slottingoncassette;
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

    public function getbgtapethickness()
	{
		return $this->bgtapethickness;
	}

    public function getbgtapestaged()
	{
		return $this->bgtapestaged;
	}

    public function getdiwatertemp()
	{
		return $this->diwatertemp;
	}

    public function getgrindingwheel()
	{
		return $this->grindingwheel;
	}

    public function getgrindingwheelusabletooth()
	{
		return $this->grindingwheelusabletooth;
	}

    public function getaircut()
	{
		return $this->aircut;
	}

    public function getspindlerpm()
	{
		return $this->spindlerpm;
	}

    public function getfeedratep1()
	{
		return $this->feedratep1;
	}

    public function getfeedratep2()
	{
		return $this->feedratep2;
	}

    public function getfeedratep3()
	{
		return $this->feedratep3;
	}

    public function getchucktableseedp1()
	{
		return $this->chucktableseedp1;
	}

    public function getchucktableseedp2()
	{
		return $this->chucktableseedp2;
	}

    public function getchucktableseedp3()
	{
		return $this->chucktableseedp3;
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

    public function AddeFAI003(){
		$conn = new Connection();
        $success = true;
		try{
			$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			//$con = $conn->open();
            $conn->query("INSERT INTO dbo.efai003 (custcode,intlot,machine,faicat,wswr,swrno,recipeno,wtaperequiredfinalthickness,wtapeinitialthickness,slottingoncassette,
            processmode,bgtapetype,bgtapeused,bgtapethickness,bgtapestaged,diwatertemp,grindingwheel,grindingwheelusabletooth,aircut,spindlerpm,
            feedratep1,feedratep2,feedratep3,chucktableseedp1,chucktableseedp2,chucktableseedp3,setupwafer,firstwaferinspection,firstwaferno,mptechemp,
            mpqcemp,remarks,lastupdate,lastupdatedby,active) VALUES('".$this->getcustcode()."','".$this->getintlot()."','".$this->getmachine()."','".$this->getfaicat()."','".$this->getwswr()."','".$this->getswrno()."','".$this->getrecipeno()."','".$this->getwtaperequiredfinalthickness()."','".$this->getwtapeinitialthickness()."','".$this->getslottingoncassette()."','".$this->getprocessmode()."','".$this->getbgtapetype()."','".$this->getbgtapeused()."','".$this->getbgtapethickness()."','".$this->getbgtapestaged()."','".$this->getdiwatertemp()."','".$this->getgrindingwheel()."','".$this->getgrindingwheelusabletooth()."','".$this->getaircut()."','".$this->getspindlerpm()."','".$this->getfeedratep1()."','".$this->getfeedratep2()."','".$this->getfeedratep3()."','".$this->getchucktableseedp1()."','".$this->getchucktableseedp2()."','".$this->getchucktableseedp3()."','".$this->getsetupwafer()."','".$this->getfirstwaferinspection()."','".$this->getfirstwaferno()."','".$this->getmptechemp()."','".$this->getmpqcemp()."','".$this->getremarks()."',GETDATE(),'".$this->getlastupdatedby()."',1)");
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