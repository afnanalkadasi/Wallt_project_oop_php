<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "blog_samples";
	public $connect;
	
	function __construct() {
		$this->connect = $this->connectDB();
	}
	
	function connectDB() {
		$connect = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $connect;
	}

}

$connect = new DBController();
?>