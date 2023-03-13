<?php 
session_start();

    require_once("./Controller/changeaddress.php");
    $controller = new ChangeAddressController();
    $controller->run();
?>