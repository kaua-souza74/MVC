<?php
require_once 'config/database.php';
require_once 'app/controlers/ProdutoController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller = new ProdutoController();

switch ($acao) {
    case 'index':
        $controller->index();
        break;
    case 'criar':
        $controller->criar();
        break;
    case 'editar':
        $controller->editar($id);
        break;
    case 'excluir':
        $controller->excluir($id);
        break;
    default:
        $controller->index();
        break;
}
?>
