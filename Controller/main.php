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

    public function getPictures(){
        $this->view->pictures= $this->model->getAllPictures();
        

    }
    public function onUpload(){
        $this->model->uploadFiles();
    }
    public function uploadToDatabase(){
        $this->model->doPathUpload();
    }


   

    public function run(){
        $this->getPictures();
        $this->onUpload();
        
        //$this->uploadToDatabase();
       
       
       
        
   
        
		require_once("./View/main.php");
        
		
    }
}

