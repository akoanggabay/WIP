<?php
date_default_timezone_set('Asia/Singapore');
class Connection{

	private $link;


	public function __construct(){

		
		$conn_array = array (
    	"UID" => "duane",
    	"PWD" => "duanepogi",
    	"Database" => "WIP",
		);

		$this->link = sqlsrv_connect('10.168.5.15\SQLWIP', $conn_array);
		//$this->link = sqlsrv_connect('localhost\SQLEXPRESS', $conn_array);
	
	}

	public function open(){

		//mssql_select_db("MES");
		if(!$this->link) {
			echo'Could not connect';
			die('Could not connect: ');
		}
		else
		{
			return $this->link;
		}	
	}
	public function query($sql){
		return sqlsrv_query($this->link,$sql);

	}

	public function fetch_array($query){

		return sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC);
	}
	
	public function close(){
		
		$success = true;
		
		try{

		sqlsrv_close($this->link);

		}catch(Exception $e){
			$success = false;
		}

		if(!$success){
		echo'Connection not closed!';
		}

	}

	public function has_rows($dataset){
		if (sqlsrv_has_rows($dataset) > 0){
			return true;
		}
		else{
			return false;

		} 
		}
	

}
?>