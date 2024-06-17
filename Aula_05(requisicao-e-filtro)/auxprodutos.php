<?php

if (!empty($_GET)) {
    $busca = $_GET['nome'];
}

$conexao = new PDO("mysql:host=localhost;dbname=db_requisicao;", 'root', '');
$query = "SELECT * FROM tb_produto WHERE titulo LIKE '%{$busca}%'";
$resultado = $conexao->query($query)->fetchAll();

echo "<pre>";
var_dump($resultado);
// $conexao = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DATABASE']};", $_ENV['USER'], $_ENV['PASSWORD']);
// $query = "SELECT * FROM tb_produto";
// $produtos = $conexao->query($query)->fetchAll();

header('location: produtos.php');