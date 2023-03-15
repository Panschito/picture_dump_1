<?php
require_once('./lib/database.php');

 
 function uploadFiles(){
    var_dump($_SESSION);
    echo $_SESSION['user_name'];
  
 if (!empty($_FILES)) {
    if(isset($_SESSION['user_name'])){

        $username = $_SESSION[user_name];
    
    }else{
    
        $username = "gofkurself";
    
    }
    
    // horizontale Linie
    echo "<hr />";
    echo "<h2>Folgende Datei wurde gesendet.</h2>";

    echo "<pre>\r\n";
    echo htmlspecialchars(print_r($_FILES));
    echo "</pre>\r\n";
    

    $picturePath = "Resources/pictures/".$username."/original";
    $pictureName = $picturePath . basename(urlencode($_FILES["datei"]["name"]));

    // Speichern des Bildes im Dateisystem
    if (move_uploaded_file($_FILES["datei"]["tmp_name"], $pictureName)) {
        echo "Datei wurde erfolgreich hochgeladen.";
        var_dump($_SESSION);
        var_dump($picturePath);
        echo "hallo";
      
       
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
uploadFiles();
