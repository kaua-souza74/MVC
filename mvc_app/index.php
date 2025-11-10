<?php
// Simple MVC front controller
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/controllers/ProductController.php';

$action = $_GET['action'] ?? 'index';
$controller = new ProductController($db);
switch($action){
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit((int)($_GET['id'] ?? 0));
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete((int)($_GET['id'] ?? 0));
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo 'Page not found';
}
