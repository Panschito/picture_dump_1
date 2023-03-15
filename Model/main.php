<?php

require_once('./lib/database.php');



class MainModel {
	private $connection;

	function __construct() {
		$db = new DBConnection();
		$this->connection = $db->getConnection();
	}

    public function getUploads() {
        $user= $_SESSION['user'];
        $statement =$this->connection->prepare("SELECT * FROM pictures WHERE user_id = :user_id");
        $statement->execute(array('user_id'=> $user->user_id));
        return $statement->fetchAll();
    }
    function uploadFiles(){
        $upload = $_FILES['datei'];
        $uploadthumb = $upload;
      
        var_dump($upload);
        var_dump($uploadthumb);
        //create Path to store upload
       $picturePath = "Resources/pictures/".$_SESSION['user']['email']."/original/";
       $pictureName = $picturePath . basename(urlencode($_FILES["datei"]["name"]));
       $thumbpath = "Resources/pictures/".$_SESSION['user']['email']."/thumbnails/";
       $thumbName = $thumbpath . basename(urlencode($_FILES["datei"]["name"]));
         // Save data
   if (move_uploaded_file($upload["tmp_name"], $pictureName)) {
           echo "Datei wurde erfolgreich hochgeladen.";
           $statement = $this->connection->prepare("INSERT INTO pictures (user_id,name,original_path,thumb_path) VALUES (:user_id,:name,:original_path,:thumb_path)");
           $statement->bindParam(':user_id',$_SESSION['user']['id_user']);
           $statement->bindParam(':name',$upload['name']);
           $statement->bindParam(':original_path', $pictureName);
           $statement->bindParam(':thumb_path', $thumbName);
           $statement->execute();
           
           if(@is_array(getimagesize($pictureName))){
            echo "<img src=".$pictureName ." width=\"200\" />";
         } 
       
       } else {
           echo "upload error";
       }
       if(!copy($pictureName,$thumbName)){}
       
    }/*
    function makeThumb($filepath,$thumbPath,$maxwidth,$maxheight,$quality=80){
        $created= false;
        $file_name = pathinfo($filepath);
        $format = $file_name['extension'];

        $newW= $maxwidth;
        $newH = $maxheight;
        $thumb = imagecreatetrucolor($newW,$newH);
        $image = createfromstring(file_get_contents($filepath));
        list($width_orig,$height_orig) getimagesize($filepath);
        imagecopyresampled($thumb,$image,0,0,0,0, $newW,$newH,$width_orig.$height_orig);

        switch(strtolower($format)){
            case 'png':
            imagepng($thumb,$thumbPath,9);
            $created=true;
            break;
            case 'gif':
            imagegif($thumb,$thumbPath);
            $created=true;
            break;
            default:
            imagejpeg($thumb,$thumbPath,$quality);
            $created=true;
            break;
        }
        imagedestroy($image);
        imagedestroy($thumb);
        return $created;


    }*/
    
    /*   $stmt = $conn->prepare("INSERT INTO tabela_script (name, lastname, email, celnumber)
      VALUES (:name, :lastname, :email, :celnumber)");
      $stmt->bindParam(':firstname', $name);
      $stmt->bindParam(':lastname', $lastname);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':celnumber', $celnumber);
      $stmt->execute();*/
   
   
 
    
}

