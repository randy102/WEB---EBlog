<?php
class DBQuery{
	protected $SQL = "";

	//Get Data

	public function From($table){
		$this->SQL .= "SELECT * FROM ".$table;
		return $this;
	}

	public function Join($taA,$taB,$fiA,$fiB){
		$this->SQL .= 
		" FROM ".$taA." AS a JOIN ".$taB." AS b ON a.".$fiA."=b.".$fiB;
		return $this;
	}

	public function Id($id){
		$this->SQL .= " WHERE id = ".$id;
		return $this;
	}

	public function Where($cond){
		$this->SQL .= " WHERE ".$cond;
		return $this;
	}

	public function Order($field,$cond){
		$this->SQL .= " ORDER BY ".$field." ".$cond;
		return $this;
	}

	public function Lim($lim){
		$this->SQL .= " LIMIT ".$lim;
		return $this;
	}

	
	//Insert Data

	public function Insert($table, $data){
		$fields = "";
		$vals = "";

		foreach ($data as $field => $val) {
			$fields .= $field.",";
			if(!isset($val)) $val = NULL;
			$vals .= "'".$val."',";
		}

		$fields = rtrim($fields,",");
		$vals = rtrim($vals,",");

		$this->SQL .= "INSERT INTO ".$table." (".$fields.") VALUES (".$vals.")";

		return $this;
	}

	//Update data
	public function Update($table, $data, $id){
		$content = "";

		foreach ($data as $field => $val) {
			$content .= $field."='".$val."',";
		}

		$content = rtrim($content,",");
		

		$this->SQL .= "UPDATE ".$table." SET ".$content." WHERE id=".$id;

		return $this;
	}

	//Increase
	public function Increase($table,$field,$id){
		$this->SQL .= "UPDATE ".$table." SET ".$field."=".$field." + 1 WHERE id=".$id;
		return $this;
	}
	//Delete data
	public function Delete($table, $id){
		$this->SQL .= "DELETE FROM ".$table." WHERE id=".$id;
		return $this;
	}
}

?>