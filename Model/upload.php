<?php
require_once('./lib/database.php');

 
 function uploadFiles(){
    

    echo htmlspecialchars(print_r($_FILES));
    
    

    $picturePath = "Resources/pictures/".$_SESSION['user']['email']."/original/";
   
    $pictureName = $picturePath . basename(urlencode($_FILES["datei"]["name"]));
    $thumbpath = "Resources/pictures/".$_SESSION['user']['email']."/thumbnails/";
   
    $thumbName = $thumbpath . basename(urlencode($_FILES["datei"]["name"]));
   

    // Speichern des Bildes im Dateisystem
    if (move_uploaded_file($_FILES["datei"]["tmp_name"], $pictureName)) {
        echo "Datei wurde erfolgreich hochgeladen.";
        
       
      
       
    } else {
        echo "Fehler beim Hochladen der Datei.";
    }
    if(!copy($pictureName, $thumbName))
    {
        
    }
  

   //Direkte Anzeige eines Bildes
   if(@is_array(getimagesize($pictureName))){
       echo "<img src=".$pictureName ." width=\"200\" />";
    } 

   
 }
 
 


uploadFiles();

