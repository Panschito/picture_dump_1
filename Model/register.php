<?php 

require_once('./lib/database.php');

class RegisterModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}

	public function createAddress($params) {
		$statement =$this->connection->prepare("INSERT INTO address (street,streetNr,city) VALUES (:street,:streetNr,:city)");
		$result =$statement->execute(array('street'=>$params['street'], 'streetNr'=>$params['streetNr'],'city'=> $params['city']));

		return $this->connection->lastInsertId();
	}

	public function createUser($params) {
		$addressId = $this->createAddress($params);
		

		$password_hash = password_hash($params['pwd'], PASSWORD_DEFAULT);
		$statement = $this->connection->prepare("INSERT INTO customer (firstName,lastName,email,password,role,addressId) VALUES (:firstName, :lastName,:email,:pwd,'customer',:addressId)");
		$result = $statement->execute(array('firstName'=> $params['firstName'], 'lastName'=> $params['lastName'], 'email'=> $params['email'], 'pwd'=> $password_hash,'addressId'=>$addressId));

	
							
		
	}
	public function validateEmail($email){
		$statement = $this->connection->prepare("SELECT * FROM  customer WHERE email = :email");
		$result = $statement->execute(array('email'=> $email));
		$user = $statement->fetch();

		return empty($user);
	}
}

		