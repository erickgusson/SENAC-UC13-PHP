<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>

    <h1>Usuários</h1>
    <a href="form.php">Novo Usuário</a>
    <table border="1">

        <tr>
            <th>Nome</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        <tr>

            <?php 
                include "conexao.php";
                $script = "SELECT * FROM foto";
                $resultado = $conn->query($script)->fetchAll();
                // return $resultado;
                
                foreach ($resultado as $dados){
                    echo "<tr>";
                    echo "<td>". $dados['nome']. "</td>";
                    echo "<td><img src='". $dados['foto'] . "' width=100></td>";
                    echo "<td><a href='form-editar.php?id=" . $dados['id'] . "'>editar</a></td>";
                    "</tr>";
                 } 

            ?>
        </tr>
    </table>
</body>

</html>