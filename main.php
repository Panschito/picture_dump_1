<?php 
require_once("./session.php");


    require_once("./Controller/main.php");
    $controller = new MainController();
    $controller->run();
?>