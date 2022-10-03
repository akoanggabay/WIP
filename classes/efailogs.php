<?php
include_once("connection.php");

class efailogs {
	


	function __construct(){

	}


    function geteFAILogs($station,$startdate,$enddate) {
        $conn = new Connection();
        $result = [];
        $column = array();

		try{
            $conn->open();
            $dataset = $conn->query("SELECT  CASE WHEN CAST(a.lastupdate AS time) between '06:00' and '14:00' THEN 'A'
			WHEN CAST(a.lastupdate AS time) between '14:00' and '22:00' THEN 'B'
			ELSE 'C'
			END as 'DateShift',
			d.custname as 'Customer Name',c.deviceno as 'Device no',b.intlot as 'Internal Lot no',b.waferrun as 'Wafer run no',c.custlotno as 'Customer Lot no',b.waferno as 'Wafer no', c.waferqty as 'Wafer qty'
			,c.qty as 'Invoice qty',b.wafersize as 'Wafer size', c.lottype as 'Lot type'
			,a.* from efai$station a inner join intlotno b on a.intlot = b.intlot inner join custlotno c on c.custlotno = b.custlot inner join customer d on d.custcode = c.custcode
			where a.lastupdate between '".$startdate."' and '".$enddate."' and a.active = 1");
			if ($conn->has_rows($dataset)) {
                
                while ($row = $conn->fetch_array($dataset)) {
                    array_push($result,$row);
                }
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

	function geteFAILogsOperator($station,$startdate,$enddate,$idno) {
        $conn = new Connection();
        $result = [];
        $column = array();

		try{
            $conn->open();
            $dataset = $conn->query("SELECT * from efai$station where lastupdate between '".$startdate."' and '".$enddate."' and lastupdatedby = '".$idno."' and active = 1");
			if ($conn->has_rows($dataset)) {
                
                while ($row = $conn->fetch_array($dataset)) {
                    array_push($result,$row);
                }
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