<?php
require_once("./Model/main.php");
require_once("./lib/view.php");
class IndexController{
    public $model;
	public $view;

	function __construct(){
		$this->model = new MainModel();
		$this->view =new View();
		
       
	}

    public function getPictures(){
        $this->view->pictures= $this->model->getAllPictures();
        

    }
  


   

    public function run(){
        $this->getPictures();
    
        
      
       
       
       
        
   
        
		require_once("./index.php");
        
		
    }
}

