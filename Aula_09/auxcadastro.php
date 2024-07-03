<?php
include 'classe/Usuario.php';
include 'classe/Pessoa.php';

// Se o campo não estiver preenchido ele cadastra a info no banco de dados
if (empty($_POST['id_para_alterar'])) {
    echo "<pre>";
    var_dump($_POST);

    $nome = $_POST['nome'];
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];

    $pessoa = new Pessoa();

    $pessoaId = $pessoa->CadastroPessoa($nome);

    echo $pessoaId;

    $usuario = new Usuario();

    $resultado = $usuario->CadastroUsuario($user, $password, $passwordConfirm, $pessoaId);

    echo $resultado;

    echo "</pre>";

    // header('location:lista.php');
}

// Valida se o campo esta preenchido
// Se o campos estiver preenchido ele vai fazer um update no banco de dados
if (!empty($_POST['id_para_alterar'])) {

    echo "<pre>";
    $nome = $_POST['nome'];
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    $id_para_alterar = $_POST['id_para_alterar'];

    $usuario = new Usuario();
    $pessoa = new Pessoa();
    
    $consulta_pessoa = $usuario->Listar1Usuario($id_para_alterar);

    $id_pessoa = $consulta_pessoa['id_pessoa'];
    
    $resultadoPessoa = $pessoa->AtualizarPessoa($id_pessoa, $nome);

    $resultadoUsuario = $usuario->AtualizarUsuario($id_para_alterar, $user, $password, $passwordConfirm);

    echo $resultadoPessoa;
    echo $resultadoUsuario;

    // header('location:lista.php');
}