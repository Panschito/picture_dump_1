<?php

require_once('./lib/database.php');

class MainModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}

    public function getOrders() {
        $user= $_SESSION['user'];
        $statement =$this->connection->prepare("SELECT * FROM orders WHERE addressId = :addressId");
        $statement->execute(array('addressId'=> $user->addressId));
        return $statement->fetchAll();
    }
}
