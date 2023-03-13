<?php 
require_once('./lib/database.php');
class OrderModel{
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}


	
	public function createOrder($params) {
		$user= $_SESSION['user'];
		$statement =$this->connection->prepare("INSERT INTO orders (customerId, addressId,work ,notes) VALUES (:customerId,:addressId,:work,:notes)");
		$result =$statement->execute(array('customerId'=>$user->customerId,'addressId' => $user->addressId, 'work'=>$params['workOption'],'notes'=> $params['notes']));

		
	}
}

 