<?php 
require_once("./Model/changeaddress.php");
require_once("./lib/view.php");

class ChangeAddressController
{ 
	public $model;
	public $view;

    function __construct(){
		$this->model = new ChangeAdressModel();
		$this->view =new View();
	}
    
    public function onSubmitted() {
        
            $this->model->changeAdress($_POST);
            }
        
    public function run(){
             if(!empty($_POST)){
                $this->onSubmitted();
            }
    
            require_once("./View/changeaddress.php");
            
        }
}