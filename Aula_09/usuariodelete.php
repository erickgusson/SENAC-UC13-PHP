<?php
include './classe/Usuario.php';

/**
 * receber um id
 * chamar a função da classe que apaga
 * apagar o usuario
 */

var_dump($_GET);

$id = $_GET['id'];

$usuario = new Usuario();

$resultado = $usuario -> DeletarUsuario($id);

var_dump($resultado);

if ($resultado == 1) {
    header('location: lista.php?deletado=1');
}