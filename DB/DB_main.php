<?php
include "DB_info.php";
include "DB_query.php";

class DB extends DBQuery{
	private $__conn;

	public function __construct(){
		$this->__conn = mysqli_connect(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
		
		//Set Vietnamese
		mysqli_set_charset($this->__conn, 'UTF8');
	}


	public function get(){
		$sql = $this->SQL; //Get sql 

		$result = mysqli_query($this->__conn,$sql); //Run sql

		//Check if error
		if(!$result){
			echo mysqli_error($this->__conn);
		}

		$this->SQL = ""; //Clear sql 

		$data = array();
		
		//Get data from rows then convert to array
		while($temp = mysqli_fetch_assoc($result)){
			array_push($data, $temp);
		}
		return $data;
	}

	public function run(){
		//Get sql
		$sql = $this->SQL;

		//Run sql
		$result = mysqli_query($this->__conn,$sql);

		//Check if error
		if(!$result){
			echo mysqli_error($this->__conn);
		}

		$this->SQL = ""; //Clear sql
	}

	public function count(){

		$sql = $this->SQL; //Get sql 

		$result = mysqli_query($this->__conn,$sql); //Run sql

		//Check if error
		if(!$result){
			echo mysqli_error($this->__conn);
		}

		$numrows = mysqli_num_rows($result);

		return $numrows;
	}

	public function __destruct(){
		mysqli_close($this->__conn);
	}
}
?>