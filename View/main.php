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
            <form method="POST" enctype="multipart/form-data">
 
    <label>Bitte wählen sie eine Datei zum hochladen aus.</label>
    <input name="datei" type="file" value="" />

    <br />

    <input type="submit" value="Datei hochladen" />

    </form>

        <?php

        if (!empty($_FILES)) {

         // horizontale Linie
        echo "<hr />";
        echo "<h2>Folgende Datei wurde gesendet.</h2>";

         echo "<pre>\r\n";
        echo htmlspecialchars(print_r($_FILES));
        echo "</pre>\r\n";
        }

        ?>
        </div>
        <nav>
        <button type="submit" name="newestButton" value="newestButton">Neuste Bilder</button>
        <button type="submit" name="topTenButton" value="topTenButton">Top 10</button>
        <button type="submit" name="ownPicsButton" value="ownPicsButton">Eigene Bilder</button>
    </nav>


</body>
</html>