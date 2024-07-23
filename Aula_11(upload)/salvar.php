<?php

$nome = $_POST["nome"];
echo "Nome do usuário:   $nome  <br>";

$foto = $_FILES["foto"];
// var_dump($foto);
// echo "<pre>";
// print_r($foto);
// exit();

// echo round(microtime(true)); → mricrotime true = Imprime o horário atual exato junto com os milésimos, round = modifica pra mostrar apenas numeros inteiros sem casas decimais

$nomeCaminhoDaFoto = "img/" . round(microtime(true)) . $foto['name']; // Estamos salvando nessa variável o caminho + nome da foto com o microtime pra não haver conflitos com nome de arquivos.
move_uploaded_file($foto['tmp_name'], $nomeCaminhoDaFoto);
echo "Foto do usuário:" . $nomeCaminhoDaFoto . "<br>";

include "conexao.php";

$script = "INSERT INTO foto(nome, foto) VALUES ('$nome', '$nomeCaminhoDaFoto')";

$resultado = $conn->query($script)->fetch();

header('location: index.php');

return $resultado;

$conn = null;


?>