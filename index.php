<?php

$controller = $_GET['controller'] ?? 'autor';
$action = $_GET['action'] ?? 'index';

require_once __DIR__ . '/controllers/' . ucfirst($controller) . 'Controller.php';

$controllerName = ucfirst($controller) . 'Controller';
$ctrl = new $controllerName();
$ctrl->$action();
?>
