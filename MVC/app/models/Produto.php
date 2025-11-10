<?php

class Produto {
    private $conn;
    private $table_name = "produtos";

    public $id;
    public $nome;
    public $preco;
    public $categoria;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Listar produtos
    public function listar() {
        $query = "SELECT id, nome, preco, categoria FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Adicionar novo produto
    public function adicionar() {
        $query = "INSERT INTO " . $this->table_name . " SET nome=:nome, preco=:preco, categoria=:categoria";
        $stmt = $this->conn->prepare($query);

        // Sanitização
        $this->nome=htmlspecialchars(strip_tags($this->nome));
        $this->preco=htmlspecialchars(strip_tags($this->preco));
        $this->categoria=htmlspecialchars(strip_tags($this->categoria));

        // Bind dos valores
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":preco", $this->preco);
        $stmt->bindParam(":categoria", $this->categoria);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Obter um único produto pelo ID
    public function obterUm() {
        $query = "SELECT nome, preco, categoria FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->preco = $row['preco'];
        $this->categoria = $row['categoria'];
    }

    // Editar produto
    public function editar() {
        $query = "UPDATE " . $this->table_name . " SET nome = :nome, preco = :preco, categoria = :categoria WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Sanitização
        $this->nome=htmlspecialchars(strip_tags($this->nome));
        $this->preco=htmlspecialchars(strip_tags($this->preco));
        $this->categoria=htmlspecialchars(strip_tags($this->categoria));
        $this->id=htmlspecialchars(strip_tags($this->id));

        // Bind dos valores
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':preco', $this->preco);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Excluir produto
    public function excluir() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        // Sanitização
        $this->id=htmlspecialchars(strip_tags($this->id));

        // Bind do id
        $stmt->bindParam(1, $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
