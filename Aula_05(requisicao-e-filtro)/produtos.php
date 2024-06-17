<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisição</title>
</head>

<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 200px;
    }
</style>

<?php

if (isset($_GET['nome'])) {

    if (!empty($_GET)) {
        $busca = $_GET['nome'];
    }

    $conexao = new PDO("mysql:host=localhost;dbname=db_requisicao;", 'root', '');
    $query = "SELECT * FROM tb_produto WHERE titulo LIKE '%{$busca}%'";
    $resultado = $conexao->query($query)->fetchAll();
}

?>

<body>

    <h1>Requisição</h1>

    <form action="#" method="get">

        <input type="text" name="nome" id="nome" placeholder="Nome do produto">
        <input type="submit" value="Enviar">

    </form>

    <br>

    <table border="1">

        <thead>

            <tr>

                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>

            </tr>

        </thead>

        <tbody>

            <?php

            if (!empty($resultado)) {
                foreach ($resultado as $value) { ?>

                    <tr>

                        <td><?= $value['id']?></td>
                        <td><?= $value['titulo']?></td>
                        <td>R$ <?= str_replace(".", ",", $value['preco'])?></td>

                    </tr>

            <?php

                }
            }

            ?>


        </tbody>

    </table>

</body>

</html>