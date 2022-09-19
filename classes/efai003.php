<?php
include_once("connection.php");

class efai003 {
    
	private $custcode;
	private $intlot;
	private $machine;
	private $faicat;
	private $wswr;
	private $swrno;
	private $wafersize;
	private $recipeno;
	private $wtaperequiredfinalthickness;
	private $wtapeinitialthickness;
	private $slottingoncassette;
	private $processmode;
	private $dummywafersetup;
	private $bgtapetype;
	private $bgtapeused;
	private $bgtapethickness;
	private $bgtapestaged;
	private $diwatertemp;
	private $grindingwheelz1;
	private $grindingwheelz2;
	private $grindingwheelusabletoothz1;
	private $grindingwheelusabletoothz2;
	private $aircutz1;
	private $aircutz2;
	private $spindlerpmz1;
	private $spindlerpmz2;
	private $feedratep1z1;
	private $feedratep1z2;
	private $feedratep2z1;
	private $feedratep2z2;
	private $feedratep3z1;
	private $feedratep3z2;
	private $chucktableseedp1z1;
	private $chucktableseedp1z2;
	private $chucktableseedp2z1;
	private $chucktableseedp2z2;
	private $chucktableseedp3z1;
	private $chucktableseedp3z2;
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

	public function setcustcode($custcode){$this->custcode=$custcode;}
	public function setintlot($intlot){$this->intlot=$intlot;}
	public function setmachine($machine){$this->machine=$machine;}
	public function setfaicat($faicat){$this->faicat=$faicat;}
	public function setwswr($wswr){$this->wswr=$wswr;}
	public function setswrno($swrno){$this->swrno=$swrno;}
	public function setwafersize($wafersize){$this->wafersize=$wafersize;}
	public function setrecipeno($recipeno){$this->recipeno=$recipeno;}
	public function setwtaperequiredfinalthickness($wtaperequiredfinalthickness){$this->wtaperequiredfinalthickness=$wtaperequiredfinalthickness;}
	public function setwtapeinitialthickness($wtapeinitialthickness){$this->wtapeinitialthickness=$wtapeinitialthickness;}
	public function setslottingoncassette($slottingoncassette){$this->slottingoncassette=$slottingoncassette;}
	public function setprocessmode($processmode){$this->processmode=$processmode;}
	public function setdummywafersetup($dummywafersetup){$this->dummywafersetup=$dummywafersetup;}
	public function setbgtapetype($bgtapetype){$this->bgtapetype=$bgtapetype;}
	public function setbgtapeused($bgtapeused){$this->bgtapeused=$bgtapeused;}
	public function setbgtapethickness($bgtapethickness){$this->bgtapethickness=$bgtapethickness;}
	public function setbgtapestaged($bgtapestaged){$this->bgtapestaged=$bgtapestaged;}
	public function setdiwatertemp($diwatertemp){$this->diwatertemp=$diwatertemp;}
	public function setgrindingwheelz1($grindingwheelz1){$this->grindingwheelz1=$grindingwheelz1;}
	public function setgrindingwheelz2($grindingwheelz2){$this->grindingwheelz2=$grindingwheelz2;}
	public function setgrindingwheelusabletoothz1($grindingwheelusabletoothz1){$this->grindingwheelusabletoothz1=$grindingwheelusabletoothz1;}
	public function setgrindingwheelusabletoothz2($grindingwheelusabletoothz2){$this->grindingwheelusabletoothz2=$grindingwheelusabletoothz2;}
	public function setaircutz1($aircutz1){$this->aircutz1=$aircutz1;}
	public function setaircutz2($aircutz2){$this->aircutz2=$aircutz2;}
	public function setspindlerpmz1($spindlerpmz1){$this->spindlerpmz1=$spindlerpmz1;}
	public function setspindlerpmz2($spindlerpmz2){$this->spindlerpmz2=$spindlerpmz2;}
	public function setfeedratep1z1($feedratep1z1){$this->feedratep1z1=$feedratep1z1;}
	public function setfeedratep1z2($feedratep1z2){$this->feedratep1z2=$feedratep1z2;}
	public function setfeedratep2z1($feedratep2z1){$this->feedratep2z1=$feedratep2z1;}
	public function setfeedratep2z2($feedratep2z2){$this->feedratep2z2=$feedratep2z2;}
	public function setfeedratep3z1($feedratep3z1){$this->feedratep3z1=$feedratep3z1;}
	public function setfeedratep3z2($feedratep3z2){$this->feedratep3z2=$feedratep3z2;}
	public function setchucktableseedp1z1($chucktableseedp1z1){$this->chucktableseedp1z1=$chucktableseedp1z1;}
	public function setchucktableseedp1z2($chucktableseedp1z2){$this->chucktableseedp1z2=$chucktableseedp1z2;}
	public function setchucktableseedp2z1($chucktableseedp2z1){$this->chucktableseedp2z1=$chucktableseedp2z1;}
	public function setchucktableseedp2z2($chucktableseedp2z2){$this->chucktableseedp2z2=$chucktableseedp2z2;}
	public function setchucktableseedp3z1($chucktableseedp3z1){$this->chucktableseedp3z1=$chucktableseedp3z1;}
	public function setchucktableseedp3z2($chucktableseedp3z2){$this->chucktableseedp3z2=$chucktableseedp3z2;}
	public function setsetupwafer($setupwafer){$this->setupwafer=$setupwafer;}
	public function setfirstwaferinspection($firstwaferinspection){$this->firstwaferinspection=$firstwaferinspection;}
	public function setfirstwaferno($firstwaferno){$this->firstwaferno=$firstwaferno;}
	public function setmptechemp($mptechemp){$this->mptechemp=$mptechemp;}
	public function setmpqcemp($mpqcemp){$this->mpqcemp=$mpqcemp;}
	public function setremarks($remarks){$this->remarks=$remarks;}
	public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
	public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
	public function setactive($active){$this->active=$active;}

	

	//Getter

	public function getcustcode(){return $this->custcode;}
	public function getintlot(){return $this->intlot;}
	public function getmachine(){return $this->machine;}
	public function getfaicat(){return $this->faicat;}
	public function getwswr(){return $this->wswr;}
	public function getswrno(){return $this->swrno;}
	public function getwafersize(){return $this->wafersize;}
	public function getrecipeno(){return $this->recipeno;}
	public function getwtaperequiredfinalthickness(){return $this->wtaperequiredfinalthickness;}
	public function getwtapeinitialthickness(){return $this->wtapeinitialthickness;}
	public function getslottingoncassette(){return $this->slottingoncassette;}
	public function getprocessmode(){return $this->processmode;}
	public function getdummywafersetup(){return $this->dummywafersetup;}
	public function getbgtapetype(){return $this->bgtapetype;}
	public function getbgtapeused(){return $this->bgtapeused;}
	public function getbgtapethickness(){return $this->bgtapethickness;}
	public function getbgtapestaged(){return $this->bgtapestaged;}
	public function getdiwatertemp(){return $this->diwatertemp;}
	public function getgrindingwheelz1(){return $this->grindingwheelz1;}
	public function getgrindingwheelz2(){return $this->grindingwheelz2;}
	public function getgrindingwheelusabletoothz1(){return $this->grindingwheelusabletoothz1;}
	public function getgrindingwheelusabletoothz2(){return $this->grindingwheelusabletoothz2;}
	public function getaircutz1(){return $this->aircutz1;}
	public function getaircutz2(){return $this->aircutz2;}
	public function getspindlerpmz1(){return $this->spindlerpmz1;}
	public function getspindlerpmz2(){return $this->spindlerpmz2;}
	public function getfeedratep1z1(){return $this->feedratep1z1;}
	public function getfeedratep1z2(){return $this->feedratep1z2;}
	public function getfeedratep2z1(){return $this->feedratep2z1;}
	public function getfeedratep2z2(){return $this->feedratep2z2;}
	public function getfeedratep3z1(){return $this->feedratep3z1;}
	public function getfeedratep3z2(){return $this->feedratep3z2;}
	public function getchucktableseedp1z1(){return $this->chucktableseedp1z1;}
	public function getchucktableseedp1z2(){return $this->chucktableseedp1z2;}
	public function getchucktableseedp2z1(){return $this->chucktableseedp2z1;}
	public function getchucktableseedp2z2(){return $this->chucktableseedp2z2;}
	public function getchucktableseedp3z1(){return $this->chucktableseedp3z1;}
	public function getchucktableseedp3z2(){return $this->chucktableseedp3z2;}
	public function getsetupwafer(){return $this->setupwafer;}
	public function getfirstwaferinspection(){return $this->firstwaferinspection;}
	public function getfirstwaferno(){return $this->firstwaferno;}
	public function getmptechemp(){return $this->mptechemp;}
	public function getmpqcemp(){return $this->mpqcemp;}
	public function getremarks(){return $this->remarks;}
	public function getlastupdate(){return $this->lastupdate;}
	public function getlastupdatedby(){return $this->lastupdatedby;}
	public function getactive(){return $this->active;}


    public function AddeFAI003(){
		$conn = new Connection();
        $success = true;
		try{
			$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            //$conn->query("INSERT INTO dbo.efai003 () VALUES()");
            $sql = "INSERT INTO dbo.efai003 (custcode,intlot,machine,faicat,wswr,swrno,recipeno,wtaperequiredfinalthickness,wtapeinitialthickness,slottingoncassette,processmode,
			bgtapetype,bgtapeused,bgtapethickness,bgtapestaged,diwatertemp,grindingwheelz1,grindingwheelz2,grindingwheelusabletoothz1,grindingwheelusabletoothz2,aircutz1,
			aircutz2,spindlerpmz1,spindlerpmz2,feedratep1z1,feedratep1z2,feedratep2z1,feedratep2z2,feedratep3z1,feedratep3z2,chucktableseedp1z1,chucktableseedp1z2,
			chucktableseedp2z1,chucktableseedp2z2,chucktableseedp3z1,chucktableseedp3z2,setupwafer,firstwaferinspection,firstwaferno,mptechemp,mpqcemp,remarks,lastupdate,lastupdatedby,
			active,wafersize,dummywafersetup) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getcustcode(),$this->getintlot(),$this->getmachine(),$this->getfaicat(),$this->getwswr(),$this->getswrno(),$this->getrecipeno(),$this->getwtaperequiredfinalthickness(),
			$this->getwtapeinitialthickness(),$this->getslottingoncassette(),$this->getprocessmode(),$this->getbgtapetype(),$this->getbgtapeused(),$this->getbgtapethickness(),$this->getbgtapestaged(),$this->getdiwatertemp(),
			$this->getgrindingwheelz1(),$this->getgrindingwheelz2(),$this->getgrindingwheelusabletoothz1(),$this->getgrindingwheelusabletoothz2(),$this->getaircutz1(),$this->getaircutz2(),$this->getspindlerpmz1(),
			$this->getspindlerpmz2(),$this->getfeedratep1z1(),$this->getfeedratep1z2(),$this->getfeedratep2z1(),$this->getfeedratep2z2(),$this->getfeedratep3z1(),$this->getfeedratep3z2(),$this->getchucktableseedp1z1(),$this->getchucktableseedp1z2(),
			$this->getchucktableseedp2z1(),$this->getchucktableseedp2z2(),$this->getchucktableseedp3z1(),$this->getchucktableseedp3z2(),$this->getsetupwafer(),$this->getfirstwaferinspection(),
			$this->getfirstwaferno(),$this->getmptechemp(),$this->getmpqcemp(),$this->getremarks(),$this->getlastupdate(),$this->getlastupdatedby(),$this->getactive(),$this->getwafersize(),$this->getdummywafersetup());
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
			
			$conn->close();
		}catch(Exception $e){
            $success = false;
		}
        return $success;	
	}

}

?>