<?php
require_once('./lib/database.php');

class uploadModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}
 
 

 
 
}




