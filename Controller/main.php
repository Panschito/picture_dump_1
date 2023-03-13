<?php
require_once("./Model/main.php");
require_once("./lib/view.php");
class MainController{
    public $model;
	public $view;

	function __construct(){
		$this->model = new MainModel();
		$this->view =new View();
		$this->view->isLoggedIn = true;
       
	}

    public function getOrders(){
        $this->view->orders= $this->model->getOrders();
        $this->view->user= $_SESSION['user'];

    }

    public function run(){
        $this->getOrders();
   

		require_once("./View/main.php");
		
    }
}

