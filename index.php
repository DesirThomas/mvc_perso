<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('SITE_DIR','/');

$requestUri = $_SERVER['REQUEST_URI'];

$requestParams = array_slice(explode('/', $requestUri), 1);

$controller = (!empty($requestParams[0]) ? ucfirst($requestParams[0])  : 'Menu'). 'Controller';
$action = (!empty($requestParams[1]) ? $requestParams[1] : 'index'). 'Action';

if (file_exists('controllers/'. $controller . '.php')) {
    require('controllers/' . $controller . '.php');
    if (function_exists($action)) {
        $action();
    } else {
        require('404.php');
    }
} else {
    require('404.php');
}

