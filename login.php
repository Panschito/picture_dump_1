<?php 
session_start();

    require_once("./Controller/login.php");
    $controller = new LoginController();
    $controller->run();
?>