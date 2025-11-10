<?php include __DIR__ . '/../layout_header.php'; ?>
<table>
  <thead><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Categoria</th><th>Ações</th></tr></thead>
  <tbody>
    <?php foreach($products as $p): ?>
    <tr>
      <td><?=htmlspecialchars($p['id'])?></td>
      <td><?=htmlspecialchars($p['nome'])?></td>
      <td>R$ <?=number_format($p['preco'],2,",",".")?></td>
      <td><?=htmlspecialchars($p['categoria'])?></td>
      <td class="actions">
        <a href="index.php?action=edit&id=<?= $p['id'] ?>">Editar</a>
        <form class="inline" method="post" action="index.php?action=delete&id=<?= $p['id'] ?>" onsubmit="return confirm('Excluir produto?');">
          <button type="submit">Excluir</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include __DIR__ . '/../layout_footer.php'; ?>
