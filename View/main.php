<!DOCTYPE html>
<html>

<head>
     <title>PICTURE-DUMP</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
      integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
      crossorigin="anonymous"
      async>
    </script>

    <!-- Material design icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.1.96/css/materialdesignicons.min.css"
      integrity="sha512-NaaXI5f4rdmlThv3ZAVS44U9yNWJaUYWzPhvlg5SC7nMRvQYV9suauRK3gVbxh7qjE33ApTPD+hkOW78VSHyeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      href="./View/custom.css"
      rel="stylesheet"
    />

</head>

<body>
    <div>
        <div>
            
        <div id="logout-main-button">
            <a href="logout.php">
                <button class="btn btn-primary" type="submit" name="logout" value="logout">Logout</button></a>
        </div>
        <div>
           

           

            <form id="upload-form" method="POST" enctype="multipart/form-data">

                
                <input id="upload-form-lable" class="form-label" name="datei" type="file" value="" />

                <br />

                <input id="upload-button"class="btn btn-primary" type="submit" value="UPLOAD" />


            </form>
</div>


        <div>
            <nav id="nav-main">
        <button class="btn btn-primary" type="submit" name="newestButton" value="newestButton">Neue Bilder</button>
        <button class="btn btn-primary" type="submit" name="topTenButton" value="topTenButton">Top 10</button>
        <button class="btn btn-primary" type="submit" name="ownPicsButton" value="ownPicsButton">Eigene Bilder</button>
     <button class="btn btn-primary" type="submit" name="galleryButton" value="galleryButton">Gallerie</button>
</nav>

        </div>
        <div class="container py-2">
      <div
        id="imageFeed"
        class="row"
        data-masonry='{"percentPosition": true }'>

        <?php foreach($this->view->pictures as $key =>$value){
            $img = array('src' => $value['original_path'], 'thumb' => $value['original_path'], 'title' => $value['user_name']);
 
            echo '
               
                <div class="col col-lg-2 col-md-4 col-sm-6 col-6 image-container">
                    <img 
                        src="'.$value['original_path'].'" 
                        alt="geit nid..." 
                        class="img-fluid w-100 zoom-in rounded"
                        onclick=\'triggerModal('.json_encode($img).')\'
                    />
                    <label>'.$value['user_name'].'</label>
                </div>
            ';
            
        }?>

      </div>
    </div>

    <!-- Modal: id="myModal" -->
    <div
      class="modal fade"
      id="fullsceenImage"
      tabindex="-1"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <!-- Not necessary
          <div class="modal-header">

          </div>
          -->
          <div class="modal-body">

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <script src="./View/commons.js"></script>
    <script src="./View/grid.js"></script>
        

        



</body>
</div>




</body>

</html>