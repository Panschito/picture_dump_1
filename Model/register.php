<?php 

require_once('./lib/database.php');

class RegisterModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}


	public function createUser($params) {
		
		

		$password_hash = password_hash($params['pwd'], PASSWORD_DEFAULT);
		$statement = $this->connection->prepare("INSERT INTO user (user_name,email,password) VALUES (:user_name,:email,:password)");
		$result = $statement->execute(array('user_name'=> $params['userName'],'email'=> $params['email'], 'password'=> $password_hash));
		$path = "Resources/pictures/".$params['userName']."/original";
		$path1 = "Resources/pictures/".$params['userName']."/thumbnails";
		if(!file_exists($path)){
			mkdir($path,0777,true);
			mkdir($path1,0777,true);
		}
		

	
							
		
	}
	public function validateEmail($email){
		$statement = $this->connection->prepare("SELECT * FROM  user WHERE email = :email");
		$result = $statement->execute(array('email'=> $email));
		$user = $statement->fetch();

		return empty($user);
	}
}

		