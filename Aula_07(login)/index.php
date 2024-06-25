<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 97vh;
        justify-content: center;
        background: linear-gradient(90deg, rebeccapurple, tomato);
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        padding: 20px 10px;
        border-radius: 5px;

        background-color: rgba(20, 2, 0, .5);
    }

    input[type="text"] {
        width: 200px;
        height: 30px;
        background-color: #f4f4f4;
        border: 1px solid black;
        border-radius: 10px;
        padding: 5px 5px;
        margin: 10px;
    }

    input[type="submit"] {
        width: 150px;
        height: 30px;

        cursor: pointer;

        justify-content: center;

        border-radius: 10px;
        border: none;

        transition: 1000ms;
    }

    input[type="submit"]:hover {
        color: white;
        background-color: #200200;
    }
</style>

<?php

    if (isset($_POST) && !empty($_POST)) {
        echo "<pre>";
        // var_dump($_POST);
        
        $user = $_POST['usuario'];
        $password = $_POST['senha'];
        
        // new PDO cria a conexão com, o banco de dados
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        // var_dump($conn);
        
        // $script guarda um script para a consulta do banco, nesse caso verifica se a senha e usuario é igual
        $script = "SELECT * FROM tb_usuario WHERE usuario = '{$user}' AND senha = '{$password}'";
        
        // -> query executa o scriot e o -> e o fetch retorna o resultado do script
        // $resultado guarda o resultado da consulta
        $resultado = $conn -> query($script) -> fetch();
        // echo $script . "<br>";
        // var_dump($resultado);

        if (!empty($resultado)) {
            echo "Usuario leitado com sucesso!!!";
            // Redireciona para outra página
            header('location: valido.php');
        }
        else {
            echo 'Usuario nao encontrado.';
        }
        
        echo "</pre>";
    }

?>

<body>

    <form action="#" method="POST">
        <input type="text" name="usuario" placeholder="Login">
        <input type="text" name="senha" placeholder="Digite sua senha">
        <input type="submit" value="Entrar">
    </form>

</body>

</html>