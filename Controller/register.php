<?php 
require_once("./Model/register.php");
require_once("./lib/view.php");

class RegisterController
{ 
	public $model;
	public $view;
	
	function __construct(){
		$this->model = new RegisterModel();
		$this->view =new View();
	}

	public function validate (){
		if ($_POST['pwd'] !== $_POST['pwd2']) {
			$this->view->isPasswordValid = false;
			return false;
		}
		if(!$this->model->validateEmail($_POST['email'])){
			$this->view->isEmailValid = false;
			return false;
		}

		$this->view->isPasswordValid = true;
		$this->view->isEmailValid = true;

		return true;
	}

	public function onSubmitted() {
		$isValid = $this->validate();

		if($isValid) {
			$this->model->createUser($_POST);
			header("Location: ./index.php");
		}
	}

	public function run(){
		if(!empty($_POST)){
			$this->onSubmitted();
		}

		require_once("./View/register.php");
		
	}

}
 ?>