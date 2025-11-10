<h1>Lista de Produtos</h1>
<a href="?acao=criar">Adicionar Novo Produto</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?= $produto['id'] ?></td>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= $produto['categoria'] ?></td>
        <td>
            <a href="?acao=editar&id=<?= $produto['id'] ?>">Editar</a>
            <a href="?acao=excluir&id=<?= $produto['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
