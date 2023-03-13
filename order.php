<?php 
require_once("./session.php");


    require_once("./Controller/order.php");
    $controller = new OrderController();
    $controller->run();
?>