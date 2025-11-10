<?php
// controllers/ProductController.php
class ProductController {
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function index(){
        $stmt = $this->db->query("SELECT * FROM produtos ORDER BY id DESC");
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include __DIR__ . '/../views/products/index.php';
    }

    public function create(){
        include __DIR__ . '/../views/products/create.php';
    }

    public function store(){
        $nome = $_POST['nome'] ?? '';
        $preco = $_POST['preco'] ?? 0;
        $categoria = $_POST['categoria'] ?? '';
        $stmt = $this->db->prepare('INSERT INTO produtos (nome, preco, categoria) VALUES (:nome, :preco, :categoria)');
        $stmt->execute([':nome'=>$nome, ':preco'=>$preco, ':categoria'=>$categoria]);
        header('Location: index.php');
    }

    public function edit($id){
        $stmt = $this->db->prepare('SELECT * FROM produtos WHERE id = :id');
        $stmt->execute([':id'=>$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$product){ echo 'Produto não encontrado'; return; }
        include __DIR__ . '/../views/products/edit.php';
    }

    public function update(){
        $id = (int)($_POST['id'] ?? 0);
        $nome = $_POST['nome'] ?? '';
        $preco = $_POST['preco'] ?? 0;
        $categoria = $_POST['categoria'] ?? '';
        $stmt = $this->db->prepare('UPDATE produtos SET nome=:nome, preco=:preco, categoria=:categoria WHERE id=:id');
        $stmt->execute([':nome'=>$nome, ':preco'=>$preco, ':categoria'=>$categoria, ':id'=>$id]);
        header('Location: index.php');
    }

    public function delete($id){
        $stmt = $this->db->prepare('DELETE FROM produtos WHERE id = :id');
        $stmt->execute([':id'=>$id]);
        header('Location: index.php');
    }
}
