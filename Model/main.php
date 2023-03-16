<?php

require_once('./lib/database.php');



class MainModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}
    public function getAllPictures(){
        $statement =$this->connection->prepare("SELECT original_path, user_name, id_pictures From pictures JOIN user ON pictures.user_id=user.id_user;");
        $statement->execute();
        return $statement->fetchALL();
       
    }
    public function updateLike(){
        var_dump($_POST);

        if($_SERVER['REQUEST_METHOD']!="POST")return
        var_dump($_POST);
        if($_POST['liked'] === "true"){
            
            $statement= $this->connection->prepare("INSERT INTO user_pictures(id_user,id_picture) VALUES (:id_user,:id_picture)");
        }else{
            $statement= $this->connection->prepare("DELETE FROM user_pictures WHERE id_user = :id_user AND id_picture=:id_picture");
        }

        $statement->bindParam(':id_user', $_SESSION['user']['id_user']);
        $statement->bindParam(':id_picture',$_POST['id_picture']);
        $statement->execute();
    }
    public function getLikes(){
        $user= $_SESSION['user'];
        $statement =$this->connection->prepare("SELECT * FROM user_pictures WHERE id_user = :user_id");
        $statement->execute(array('user_id'=> $user['id_user']));
        return $statement->fetchALL(PDO::FETCH_ASSOC);
    }
    public function getUploads() {
        $user= $_SESSION['user'];
        $statement =$this->connection->prepare("SELECT * FROM pictures WHERE user_id = :user_id");
        $statement->execute(array('user_id'=> $user->user_id));
        return $statement->fetchObject();
    }
    function uploadFiles(){
        if(!empty($_FILES)){
        $upload = $_FILES['datei'];
        $uploadthumb = $upload;
        $allPictures=$this->getAllPictures();
       
      
        
        //create Path to store upload
       $picturePath = "Resources/pictures/".$_SESSION['user']['email']."/original/";
       $pictureName = $picturePath . basename(urlencode($_FILES["datei"]["name"]));
       $thumbpath = "Resources/pictures/".$_SESSION['user']['email']."/thumbnails/";
       $thumbName = $thumbpath . basename(urlencode($_FILES["datei"]["name"]));
         // Save data
   if (move_uploaded_file($upload["tmp_name"], $pictureName)) {
           
           $statement = $this->connection->prepare("INSERT INTO pictures (user_id,name,original_path,thumb_path) VALUES (:user_id,:name,:original_path,:thumb_path)");
           $statement->bindParam(':user_id',$_SESSION['user']['id_user']);
           $statement->bindParam(':name',$upload['name']);
           $statement->bindParam(':original_path', $pictureName);
           $statement->bindParam(':thumb_path', $thumbName);
           $statement->execute();
           echo "Datei wurde erfolgreich hochgeladen.";
           
          
       
       } else {
           echo "upload error";
       }
       if(!copy($pictureName,$thumbName)){}
    }
       
    }
    
}

