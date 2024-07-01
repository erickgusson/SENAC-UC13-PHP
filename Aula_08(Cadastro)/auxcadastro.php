<?php
include 'classe/Usuario.php';

// echo "<marquee scrollamount='100' direction='down' width='99%' height='99%' behavior='alternate'  style='border:solid;'>  <marquee scrollamount='100' behavior='alternate'> <pre>";
echo "<pre>";
var_dump($_POST);

$user = $_POST['usuario'];
$password = $_POST['senha'];
$passwordConfirm = $_POST['confirmarSenha'];

$usuario = new Usuario();

$resultado = $usuario -> CadastroUsuario($user, $password, $passwordConfirm);

echo $resultado;

echo "</pre>";
// echo "</marquee> </marquee>";