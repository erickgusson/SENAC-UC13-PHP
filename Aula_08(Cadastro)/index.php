<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
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

    h1 {
        color: white;
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

<body>

    <form action="auxcadastro.php" method="POST">
        <h1>Cadastrar Usuarios</h1>
        <!-- <input type="text" name="nome" placeholder="Nome"> -->
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="text" name="senha" placeholder="Senha">
        <input type="text" name="confirmarSenha" placeholder="Confirmar senha">
        <input type="submit" value="Entrar">
    </form>

</body>

</html>