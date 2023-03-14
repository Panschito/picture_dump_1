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
    public function makeUpload(){
        $statement1= $this->connection->prepare("SELECT user_id FROM user WHERE user_name= :userName;");
        $statement1->execute(array(
        $statement = $this->connection->prepare("INSERT INTO pictures (user_id,picture,pictureName,public) VALUES (:user_id,:email,:password)");
		$result = $statement->execute(array('user_name'=> $params['userName'],'email'=> $params['email'], 'password'=> $password_hash));
    }
}
