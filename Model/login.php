<?php 
require_once('./lib/database.php');
class LoginModel {


	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}

public function getUser($email){
	$statement = $this->connection->prepare('SELECT * FROM customer WHERE email = :email');
	$statement->execute(array('email'=> $email));

	return $statement->fetchObject();
}

	public function loginUser($email, $password) {
		$user = $this->getUser($email);

		if($user !== false && password_verify($password,$user->password)){
			$_SESSION['user'] =$user;
			return true;
		}

		return false;
		

	}

}

