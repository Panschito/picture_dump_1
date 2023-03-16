<?php

require_once('./lib/database.php');



class IndexModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}
    public function getAllPictures(){
        $statement =$this->connection->prepare("SELECT original_path, user_name From pictures JOIN user ON pictures.user_id=user.id_user;");
        $statement->execute();
        return $statement->fetchALL();
       
    }
    
}

