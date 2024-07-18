<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include_once "conexao.php";
$senha = $senha;
$sql = "SELECT * FROM `t_perfil` WHERE email = '$usuario' and senha = '$senha'";
$dados = mysqli_query($conexao,$sql);


if($dados->num_rows >0){
    session_start();

    $_SESSION["usuario"] = $usuario;

    $linha = $dados->fetch_assoc();
    $foto = $linha['foto'];
    $_SESSION['fotoPerfilLogado'] = $foto;

    $nivel = $linha['nivel'];
    $_SESSION['nivel'] = $nivel;
    
    header('Location: index.php');
}else{
    include_once "mensagens.php";
    header('Location: login.php?msg=loginerro');
}

?>