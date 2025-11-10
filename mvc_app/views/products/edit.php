<?php include __DIR__ . '/../layout_header.php'; ?>
<h2>Editar produto</h2>
<form method="post" action="index.php?action=update">
  <input type="hidden" name="id" value="<?=htmlspecialchars($product['id'])?>">
  <label>Nome</label>
  <input type="text" name="nome" value="<?=htmlspecialchars($product['nome'])?>" required>
  <label>Preço</label>
  <input type="number" step="0.01" name="preco" value="<?=htmlspecialchars($product['preco'])?>" required>
  <label>Categoria</label>
  <input type="text" name="categoria" value="<?=htmlspecialchars($product['categoria'])?>" required>
  <button type="submit">Atualizar</button>
</form>
<?php include __DIR__ . '/../layout_footer.php'; ?>
