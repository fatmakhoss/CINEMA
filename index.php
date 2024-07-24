<?php
session_start();
require_once __DIR__.'/Controller/FilmController.php';
if(!isset($_GET['action'])){
    $action='index';
    
    
}else{
    $action=strtolower(trim($_GET['action']));
}
if(!isset($_GET['controller'])){
    $controller='HomeController';
    
    
}else{
    $controller=ucfirst(strtolower(trim($_GET['controller']))).'Controller';
}
require_once __DIR__.'/Controller/'.$controller.'.php';
$controller::$action();

?>