<?php
include_once("connection.php");

class indexheight {
    private $intlot;
    private $ch;
    private $ih1;
    private $ih2;
    private $ih3;
    private $ih4;
    private $ih5;
    private $lastupdate;
    private $lastupdatedby;
    private $active;


	function __construct(){

	}

	//setter

    public function setintlot($intlot){$this->intlot=$intlot;}
    public function setch($ch){$this->ch=$ch;}
    public function setih1($ih1){$this->ih1=$ih1;}
    public function setih2($ih2){$this->ih2=$ih2;}
    public function setih3($ih3){$this->ih3=$ih3;}
    public function setih4($ih4){$this->ih4=$ih4;}
    public function setih5($ih5){$this->ih5=$ih5;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function getintlot(){return $this->intlot;}
    public function getch(){return $this->ch;}
    public function getih1(){return $this->ih1;}
    public function getih2(){return $this->ih2;}
    public function getih3(){return $this->ih3;}
    public function getih4(){return $this->ih4;}
    public function getih5(){return $this->ih5;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddIndexHeight(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.indexheight (intlot,ch,ih1,ih2,ih3,ih4,ih5,lastupdate,lastupdatedby,active) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getintlot(),$this->getch(),$this->getih1(),$this->getih2(),$this->getih3(),$this->getih4(),$this->getih5(),$this->getlastupdate(),$this->getlastupdatedby(),1);
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