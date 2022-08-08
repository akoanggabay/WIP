<?php
include_once("connection.php");

class bladeheight {
    private $intlot;
    private $ch;
    private $bh1;
    private $bh2;
    private $bh3;
    private $bh4;
    private $bh5;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	

	function __construct(){

	}

	//setter
	
    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setch($ch){$this->ch=$ch;}
    public function setbh1($bh1){$this->bh1=$bh1;}
    public function setbh2($bh2){$this->bh2=$bh2;}
    public function setbh3($bh3){$this->bh3=$bh3;}
    public function setbh4($bh4){$this->bh4=$bh4;}
    public function setbh5($bh5){$this->bh5=$bh5;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function getintlot(){return $this->intlot;}
    public function getch(){return $this->ch;}
    public function getbh1(){return $this->bh1;}
    public function getbh2(){return $this->bh2;}
    public function getbh3(){return $this->bh3;}
    public function getbh4(){return $this->bh4;}
    public function getbh5(){return $this->bh5;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddBladeHeight(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.bladeheight (intlot,ch,bh1,bh2,bh3,bh4,bh5,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->getch(),$this->getbh1(),$this->getbh2(),$this->getbh3(),$this->getbh4(),$this->getbh5(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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