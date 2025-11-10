
# MVC Produtos - Aplicação simples em PHP (SQLite)

Estrutura básica para gerenciar produtos (nome, preço, categoria) com operações:
- Listar produtos
- Adicionar novo produto
- Editar produto
- Excluir produto

Como usar:
1. Coloque todo o diretório `mvc_app/` em um servidor PHP (ex: Apache, XAMPP).
2. Acesse `index.php` (ex: http://localhost/mvc_app/index.php).
3. O banco SQLite será criado automaticamente em `mvc_app/data/products.db` com alguns produtos de exemplo.

Arquivos importantes:
- index.php (front controller)
- controllers/ProductController.php
- views/ (views simples)
- config.php (conexão e criação do DB SQLite)
