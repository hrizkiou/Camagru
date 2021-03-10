<?php
	//Docker
	if (PHP_OS == 'WINNT'){
		$dsn = "mysql:host=localhost;dbname=camagru";
		$dbpasswd = "";
	}
	else{
			$dsn = "mysql:host=db;dbname=camagru";
		$dbpasswd = "test";
	}
	$dbuser = "root";


	class Database {
		

		public $conn;
		public function __construct(){
			global $dsn;
			global $dbuser;
			global $dbpasswd;
			// $this->dsn = $dsn;
			// $this->dbuser = $dbuser;
			// $this->dbpasswd = $dbpasswd;
			try {
				$this->conn = new PDO($dsn, $dbuser, $dbpasswd);
				// set the PDO error mode to exception
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo "Connected successfully";
			  } catch(PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
			  }
			  return $this->conn;
		}
	}
	// $user = new Database();
?>
