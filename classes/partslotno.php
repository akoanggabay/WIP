<?php
include_once("connection.php");

class partslotno {
    private $lotno;
    private $pono;
    private $processcategory;
    private $materialcategory;
    private $supplier;
    private $description;
    private $partno;
    private $origqty;
    private $currqty;
    private $status;
    private $datereceived;
    private $dateexp;
    private $lastupdate;
    private $lastupdatedby;
    private $active;

	

	function __construct(){

	}

	//setter
	
    public function setlotno($lotno){$this->lotno=$lotno;}
    public function setpono($pono){$this->pono=$pono;}
    public function setprocesscategory($processcategory){$this->processcategory=$processcategory;}
    public function setmaterialcategory($materialcategory){$this->materialcategory=$materialcategory;}
    public function setsupplier($supplier){$this->supplier=$supplier;}
    public function setdescription($description){$this->description=$description;}
    public function setpartno($partno){$this->partno=$partno;}
    public function setorigqty($origqty){$this->origqty=$origqty;}
    public function setcurrqty($currqty){$this->currqty=$currqty;}
    public function setstatus($status){$this->status=$status;}
    public function setdatereceived($datereceived){$this->datereceived=$datereceived;}
    public function setdateexp($dateexp){$this->dateexp=$dateexp;}
    public function setlastupdate($lastupdate){$this->lastupdate=$lastupdate;}
    public function setlastupdatedby($lastupdatedby){$this->lastupdatedby=$lastupdatedby;}
    public function setactive($active){$this->active=$active;}


	//Getter

    public function getlotno(){return $this->lotno;}
    public function getpono(){return $this->pono;}
    public function getprocesscategory(){return $this->processcategory;}
    public function getmaterialcategory(){return $this->materialcategory;}
    public function getsupplier(){return $this->supplier;}
    public function getdescription(){return $this->description;}
    public function getpartno(){return $this->partno;}
    public function getorigqty(){return $this->origqty;}
    public function getcurrqty(){return $this->currqty;}
    public function getstatus(){return $this->status;}
    public function getdatereceived(){return $this->datereceived;}
    public function getdateexp(){return $this->dateexp;}
    public function getlastupdate(){return $this->lastupdate;}
    public function getlastupdatedby(){return $this->lastupdatedby;}
    public function getactive(){return $this->active;}


    public function AddPartsLotno(){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "INSERT INTO dbo.partslotno (lotno,pono,processcategory,materialcategory,supplier,description,partno,origqty,currqty,status,datereceived,dateexp,lastupdate,lastupdatedby,active) 
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $params = array($this->getlotno(),
            $this->getpono(),
            $this->getprocesscategory(),
            $this->getmaterialcategory(),
            $this->getsupplier(),
            $this->getdescription(),
            $this->getpartno(),
            $this->getorigqty(),
            $this->getcurrqty(),
            $this->getstatus(),
            $this->getdatereceived(),
            $this->getdateexp(),
            $this->getlastupdate(),
            $this->getlastupdatedby(),
            $this->getactive());
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

    public static function GetAllPartsLotno()
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * FROM partslotno where active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new partslotno();

				$Select->setlotno($reader["lotno"]);
                $Select->setpono($reader["pono"]);
                $Select->setprocesscategory($reader["processcategory"]);
                $Select->setmaterialcategory($reader["materialcategory"]);
                $Select->setsupplier($reader["supplier"]);
                $Select->setdescription($reader["description"]);
                $Select->setpartno($reader["partno"]);
                $Select->setorigqty($reader["origqty"]);
                $Select->setcurrqty($reader["currqty"]);
                $Select->setstatus($reader["status"]);
                $Select->setdatereceived($reader["datereceived"]);
                $Select->setdateexp($reader["dateexp"]);
                $Select->setlastupdate($reader["lastupdate"]->format('F j, Y g:i:s a'));
                $Select->setlastupdatedby($reader["lastupdatedby"]);
				$Select->setactive($reader["active"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

    public static function checkExist($partslotno)
	{
		$conn = new Connection();
		$result = 'false';

		try {
			$conn->open();
			$dataset = $conn->query("SELECT * FROM dbo.partslotno WHERE lotno ='".$partslotno."'");

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

    public static function GetPartsLotno($partno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from partslotno where partno = '".$partno."' and status = 'INSTOCK' and active = 1");
			$counter = 0;
			while($reader = $conn->fetch_array($dataset)){
				$Select = new partslotno();

				$Select->setlotno($reader["lotno"]);
				$result[$counter] = $Select;
				$counter++;
			}
					
			$conn->close();
			
		}catch(Exception $e){
			echo $e;
		}
		return $result;
	}

    public static function GetDetails($lotno)
	{
		$conn = new Connection();
		$result = array();

		try{
			$conn->open();
			$dataset =  $conn->query("SELECT * from partslotno where lotno = '".$lotno."'");
			
			if ($conn->has_rows($dataset)) {
				$row = $conn->fetch_array($dataset);
				include("user.php");
                include("supplier.php");

                $user = new User;
                $supplier = new supplier;

                $supplier->GetDetails($row["supplier"]);
                $user->UserData($row["lastupdatedby"]);
				$result[] = array(
				'lotno'   => $row["lotno"],
				'pono'   => $row["pono"],
				'processcategory'   => $row["processcategory"],
				'materialcategory'   => $row["materialcategory"],
				'supplier'   => $supplier->getdescription(),
                'description'   => $row["description"],
                'partno'   => $row["partno"],
                'origqty'   => $row["origqty"],
                'currqty'   => $row["currqty"],
                'status'   => $row["status"],
				'datereceived'   => $row["datereceived"]->format('F j, Y'),
				'dateexp' => $row["dateexp"]->format('F j, Y'),
                'lastupdate' => $row["lastupdate"]->format('F j, Y g:i:s a'),
				'lastupdatedby' => $user->getfname()." ".$user->getlname()
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

    public function WithdrawParts($qty){
		$conn = new Connection();
        $success = true;
		try{
			//$conn->open();
			//$result = $conn->query("INSERT INTO dbo.PO (pono,custcode,qty,processcat,subprocesscat,status,lastupdate,lastupdatedby,active) VALUES('".$this->getpono()."','".$this->getcustcode()."','".$this->getqty()."','".$this->getprocesscat()."','".$this->getsubprocesscat()."','".$this->getstatus()."',NOW(),'".$this->getlastupdatedby()."',1)");
			$con = $conn->open();
            $sql = "UPDATE partslotno 
            set currqty = currqty - ?, 
            lastupdate = getdate(), 
            lastupdatedby = ?,
            status = CASE WHEN currqty - ? = 0 THEN 'EMPTY' ELSE 'INSTOCK' END 
            where lotno = ?";
            $params = array($qty,$this->getlastupdatedby(),$qty,$this->getlotno());
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