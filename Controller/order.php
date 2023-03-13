<?php
require_once("./Model/order.php");
require_once("./lib/view.php");
class OrderController{
    public $model;
	public $view;

	function __construct(){
		$this->model = new OrderModel();
		$this->view =new View();
		$this->view->isLoggedIn = true;
       
	}
    public function onSubmitted() {
        
        $this->model->createOrder($_POST);
        header("Location: ./main.php");
        }
    
    public function run(){
        if(!empty($_POST)){
            $this->onSubmitted();
        }

		require_once("./View/order.php");
		
    }
}