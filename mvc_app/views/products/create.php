<?php include __DIR__ . '/../layout_header.php'; ?>
<h2>Adicionar produto</h2>
<form method="post" action="index.php?action=store">
  <label>Nome</label>
  <input type="text" name="nome" required>
  <label>Preço</label>
  <input type="number" step="0.01" name="preco" required>
  <label>Categoria</label>
  <input type="text" name="categoria" required>
  <button type="submit">Salvar</button>
</form>
<?php include __DIR__ . '/../layout_footer.php'; ?>
