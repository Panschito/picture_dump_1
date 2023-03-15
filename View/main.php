<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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
            <h1>Upload</h1>

            <hr />

            <form method="POST" enctype="multipart/form-data">

                <label>Choose a Image to Upload</label>
                <input name="datei" type="file" value="" />

                <br />

                <input type="submit" value="UPLOAD" />


            </form>



</body>
</div>
<nav>
    <button type="submit" name="newestButton" value="newestButton">New Pictures</button>
    <button type="submit" name="topTenButton" value="topTenButton">Top 10</button>
    <button type="submit" name="ownPicsButton" value="ownPicsButton">Own Pictures</button>
    <button type="submit" name="galleryButton" value="galleryButton">Gallery</button>
</nav>



</body>

</html>