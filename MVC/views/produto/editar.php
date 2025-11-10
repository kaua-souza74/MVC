<h1>Editar Produto</h1>
<form action="?acao=editar&id=<?= $produto->id ?>" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value="<?= $produto->nome ?>" required><br>
    <label for="preco">Preço:</label><br>
    <input type="text" id="preco" name="preco" value="<?= $produto->preco ?>" required><br>
    <label for="categoria">Categoria:</label><br>
    <input type="text" id="categoria" name="categoria" value="<?= $produto->categoria ?>" required><br><br>
    <input type="submit" value="Atualizar">
</form>