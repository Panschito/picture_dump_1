<?php

require_once('./lib/database.php');



class MainModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}

    public function getUploads() {
        $user= $_SESSION['user'];
        $statement =$this->connection->prepare("SELECT * FROM pictures WHERE user_id = :user_id");
        $statement->execute(array('user_id'=> $user->user_id));
        return $statement->fetchAll();
    }
   
   
 
    
}

