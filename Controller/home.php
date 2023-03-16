<?php
require_once("./Model/home.php");
require_once("./lib/view.php");
class HomeController{
    public $model;
	public $view;

	function __construct(){
		$this->model = new HomeModel();
		$this->view =new View();
		
       
	}

    public function getPictures(){
        $this->view->pictures= $this->model->getAllPictures();
        

    }
  


   

    public function run(){
        $this->getPictures();
    
        
      
       
       
       
        
   
        
		require_once("./view/home.php");
        
		
    }
}

