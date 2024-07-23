<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <h1>Cadastrar novo Usuário</h1>

    <form name="novo-usuario" method="post" action="salvar.php" enctype="multipart/form-data">

        <label for="nome">Nome</label>
        <input name="nome" id="nome" type="text">
        <br><br>

        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto">
        <br><br>

        <button type="submit">SALVAR</button>
        <br><br>

    </form>

    <a href="index.php">Voltar</a>
</body>

</html>