<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PICTURE-DUMP</title>

</head>
<body>
        <div>
			<div>
				<p>what</p>
                
                
                
			</div>
           
            <div>
                <a href="logout.php"> 
                <button type="submit" name="logout" value="logout">Logout</button></a>
                </div>

            <div>
            <h1>Upload einer Datei</h1>
 
 <hr />

 <form method="POST" enctype="multipart/form-data">

     <label>Bitte wählen sie eine Datei zum hochladen aus.</label>
     <input name="datei" type="file" value="" />

     <br />

     <input type="submit" value="Datei hochladen" />

 </form>

 <?php require_once("./lib/upload.php");?>

</body>
        </div>
        <nav>
        <button type="submit" name="newestButton" value="newestButton">Neuste Bilder</button>
        <button type="submit" name="topTenButton" value="topTenButton">Top 10</button>
        <button type="submit" name="ownPicsButton" value="ownPicsButton">Eigene Bilder</button>
        <button type="submit" name="galleryButton" value="galleryButton">Gallery</button>
    </nav>


</body>
</html>