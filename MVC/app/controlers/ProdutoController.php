<?php
require_once '../../config/database.php';
require_once '../../app/models/Produto.php';

class ProdutoController {

    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $produto = new Produto($db);
        $stmt = $produto->listar();

        $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include '../../views/produto/index.php';
    }

    public function criar() {
        if($_POST) {
            $database = new Database();
            $db = $database->getConnection();

            $produto = new Produto($db);

            $produto->nome = $_POST['nome'];
            $produto->preco = $_POST['preco'];
            $produto->categoria = $_POST['categoria'];

            if($produto->adicionar()) {
                header("Location: index.php");
            }
        }
        include '../../views/produto/criar.php';
    }

    public function editar($id) {
        $database = new Database();
        $db = $database->getConnection();
        $produto = new Produto($db);

        if($_POST) {
            $produto->id = $id;
            $produto->nome = $_POST['nome'];
            $produto->preco = $_POST['preco'];
            $produto->categoria = $_POST['categoria'];

            if($produto->editar()) {
                header("Location: index.php");
            }
        } else {
            $produto->id = $id;
            $produto->obterUm();
            include '../../views/produto/editar.php';
        }
    }

    public function excluir($id) {
        $database = new Database();
        $db = $database->getConnection();
        $produto = new Produto($db);

        $produto->id = $id;

        if($produto->excluir()) {
            header("Location: index.php");
        }
    }
}
