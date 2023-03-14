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
    public function uploadFiles($params){
        if (!empty($_FILES)) {
       
           // horizontale Linie
           echo "<hr />";
           echo "<h2>Folgende Datei wurde gesendet.</h2>";
       
           echo "<pre>\r\n";
           echo htmlspecialchars(print_r($_FILES));
           echo "</pre>\r\n";
           
       
           $picturePath = "Resources/pictures/".$params['userName']."/original";
           $pictureName = $picturePath . basename(urlencode($_FILES["datei"]["name"]));
       
           // Speichern des Bildes im Dateisystem
           if (move_uploaded_file($_FILES["datei"]["tmp_name"], $pictureName)) {
               echo "Datei wurde erfolgreich hochgeladen.";
               var_dump($_SESSION);
               var_dump($params);
             
              
           } else {
               echo "Fehler beim Hochladen der Datei.";
           }
       
          /* // Direkte Anzeige eines Bildes
          if(@is_array(getimagesize($pictureName))){
              echo "<img src=".$pictureName ." width=\"200\" />";
           } 
       */
        }
   
    }
    
}
