<?php
include "boot.php";
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
    $controller = "controller\\".$controller;
    $controller = new $controller();
    echo $controller->$action();
}else{
    $app = new \core\App();
}
