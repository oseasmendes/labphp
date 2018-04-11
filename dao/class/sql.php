<?php

class Sql extends PDO {

	private $conn;

	public function __construct() {
		
		$this-> conn = new PDO("mysql:dbname=saeschurch;host=localhost","root","");


	}


	public function setParams($statement, $parameters = array()) {
		

		foreach ($parameters as $key => $value) {		
			
			#code ....
			$this->setParam($key,$value);

			
		}
	}

	public function setParam($statement, $key, $value) {
		

		$statment -> bindParam($key,$value);
	}


	public function query($rawQuery,$params = array()) {

		$stmt = $this->conn->prepare($rawQuery);

		$this-> setParams($stmt, $params);

		$stmt->execute();

		return $stmt;		

	}

	public function select($rawQuery, $params = array()) : array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>