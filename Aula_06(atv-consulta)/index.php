<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calma netflixo</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <form action="#" method="get">

        <fieldset>
            <legend>Netfiltros</legend>

            <!-- <ul>
                <li>    Ação <input type="radio" name="filtros" id="filtros" value="Action"> </li>
                <li>    Aventura <input type="radio" name="filtros" id="filtros" value="Adventure"> </li>
                <li>    Biografia <input type="radio" name="filtros" id="filtros" value="Biography"> </li>
                <li>    Crime <input type="radio" name="filtros" id="filtros" value="Crime"> </li>
                <li>    Drama <input type="radio" name="filtros" id="filtros" value="Drama"> </li>
                <li>    Fantasia <input type="radio" name="filtros" id="filtros" value="Fantasy"> </li>
                <li>    Romance <input type="radio" name="filtros" id="filtros" value="Romance"> </li>
                <li>    Sci-fi <input type="radio" name="filtros" id="filtros" value="Sci-Fi"> </li>
            </ul> -->

            <ul>
                <li>  <input type="checkbox" name="filtro Ação" id="filtros1" value="Action"> <label for="filtros1">Ação</label></li>
                <li>  <input type="checkbox" name="filtro Aventura" id="filtros2" value="Adventure"> <label for="filtros2">Aventura</label></li>
                <li>  <input type="checkbox" name="filtro Biografia" id="filtros3" value="Biography"> <label for="filtros3">Biografia</label></li>
                <li>  <input type="checkbox" name="filtro Crime" id="filtros4" value="Crime"> <label for="filtros4">Crime</label></li>
                <li>  <input type="checkbox" name="filtro Drama" id="filtros5" value="Drama"> <label for="filtros5">Drama</label></li>
                <li>  <input type="checkbox" name="filtro Fantasia" id="filtros6" value="Fantasy"> <label for="filtros6">Fantasia</label></li>
                <li>  <input type="checkbox" name="filtro Romance" id="filtros7" value="Romance"> <label for="filtros7">Romance</label></li>
                <li>  <input type="checkbox" name="filtro Sci-fi" id="filtros8" value="Sci-Fi"> <label for="filtros8">Sci-fi</label></li>
            </ul>

            <input type="submit" value="Filtrar">
        </fieldset>

    </form>

    <!-- <pre> -->

    <?php

    if (!empty($_GET)) {

        $filtros = $_GET;

        // var_dump($filtros);
        // echo "<pre>";
        // var_dump($_GET);
        // var_dump($filtros);


        echo "Você selecionou a categoria: ";
        echo implode(", ", $filtros);
        echo "<br>";

        $conexao = new PDO("mysql:host=localhost;dbname=bd_filmes;", 'root', '');

        $query = "SELECT * FROM tb_filme WHERE genero LIKE '%" . implode("%' OR genero LIKE '%", $filtros) . "%'";
        // var_dump($query);

        $resultado = $conexao->query($query)->fetchAll();
        // var_dump($resultado);

    ?>

        <table border="1">

            <thead>

                <tr>

                    <!-- <th>id</th> -->
                    <th>Nome</th>
                    <th>Genero</th>
                    <th>Lançamento</th>
                    <th>Diretor</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if (!empty($resultado)) {
                    foreach ($resultado as $value) { ?>

                        <tr>

                            <!-- <td><?= $value['id'] ?></td> -->
                            <td><?= $value['nome'] ?></td>
                            <td><?= $value['genero'] ?></td>
                            <td><?= $value['ano_lancamento'] ?></td>
                            <td><?= $value['diretor'] ?></td>

                        </tr>

                <?php

                    }
                }

                ?>

            </tbody>

        </table>

    <?php

    } else {
        echo "Selecione uma das opções para poder filtrar";
    }

    ?>

</body>

</html>