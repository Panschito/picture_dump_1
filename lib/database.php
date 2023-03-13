<?php

class DBConnection {
	private $host;
	private $dbName;
	private $user;
	private $password;
	public $connection;

	function __construct(
		$host = '127.0.0.1', 
		$dbName = 'projekt',
		$user = 'admin', 
		$password = '123'
	) {
		$this->host = $host;
		$this->dbName = $dbName;
		$this->user = $user;
		$this->password = $password;

		$this->connection = $this->connect();
	}

	public function connect() {
		try {
			$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
			
			$connection = new PDO($dsn, $this->user, $this->password);
		} catch (PDOException $e) {
	        print "Error!: " . $e->getMessage() . "<br/>";
	        die();
	    }

	    return $connection;
	}

	public function getConnection() {
		return $this->connection;
	}
}