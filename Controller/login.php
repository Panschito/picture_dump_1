<?php 
require_once("./Model/login.php");
require_once("./lib/view.php");

class LoginController{

	public $model;
	public $view;

	function __construct(){
		$this->model = new LoginModel();
		$this->view =new View();
		$this->view->isLoggedIn = true;
	}

	public function validateUser(){
		$isLoggedIn = $this->model->loginUser($_POST['email'], $_POST['pwd']);
		var_dump($isLoggedIn);
		if($isLoggedIn == true){
			header("Location: ./main.php");
		}else{
			$this->view->isLoggedIn = false;
		}
		
	}
	public function onSubmit(){
		$isVerified = $this->verify();

		

		}
	
	
	public function run(){
		if(!empty($_POST)){
			$this->validateUser();
		}

		require_once("./View/login.php");
		
	}
}


?>
