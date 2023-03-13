<?php
require_once('./lib/database.php');

class ChangeAdressModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}

	public function changeAdress($params) {
        $user= $_SESSION['user'];
		$statement =$this->connection->prepare("UPDATE address SET street = :street , streetNr = :streetNr, city = :city WHERE addressId = :addressId");
		$result =$statement->execute(array('street'=>$params['street'],'streetNr'=>$params['streetNr'],'city'=> $params['city'], 'addressId' => $user->addressId));

		
	}
}