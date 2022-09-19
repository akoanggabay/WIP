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
            $dataset = $conn->query("SELECT * from efai$station where lastupdate between '".$startdate."' and '".$enddate."' and active = 1");
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