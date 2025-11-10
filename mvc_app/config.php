<?php
// config.php - conexão MySQL (usando o banco mvc_produtos.sql)

// Configurações do banco
$host = 'localhost';
$dbname = 'mvc_produtos';  // nome do banco que você importou no MySQL
$user = 'root';            // seu usuário MySQL (padrão do XAMPP é 'root')
$pass = '';                // senha (deixe vazio se não tiver senha no XAMPP)

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão com o banco: " . $e->getMessage());
}
?>
