<?php include_once "menu.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Perfil</title>
</head>

<body>
  <main class="fundo">

    <div class="container">
      <div class="row pt-5">

        <?php
        include 'conexao.php';

        if (empty($_POST['buscar'])) {
          $buscar = "";
        } else {
          $buscar = $_POST['buscar'];
        }

        $consulta = $conexao->prepare("SELECT * FROM t_perfil WHERE nome LIKE ? OR profissao LIKE ? OR descricao LIKE ? ");
        $buscaComCuringa = "%" . $buscar . "%";
        $consulta->bind_param("sss", $buscaComCuringa, $buscaComCuringa, $buscaComCuringa);
        $consulta->execute();
        $result = $consulta->get_result();

        // $sqlBusca = "SELECT * FROM t_perfil ORDER BY RAND()";
        // $todosPerfis = mysqli_query($conexao, $sqlBusca);

        //while ($umPerfil = mysqli_fetch_assoc($todosPerfis)) { 
        while ($umPerfil = $result->fetch_assoc()) { ?>

          <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-5">
            <div class="card" style="height:100%">
              <img class="card-img-top" src="<?= $umPerfil['fundo'] ?>" alt="Bologna">
              <div class="card-body text-center">
                <img class="avatar rounded-circle" src="img/<?= $umPerfil['foto'] ?>">
                <h4 class="card-title"><?= $umPerfil['nome'] ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?= $umPerfil['profissao'] ?></h6>
                <p class="card-text"> <?= $umPerfil['descricao'] ?></p>

                <?php if ($umPerfil['instagram'] != "") { ?>
                  <a href="<?= $umPerfil['instagram'] ?>" class="btn btn-outline-dark border-0"><i class="bi bi-instagram"></i></a>
                <?php } ?>

                <?php if ($umPerfil['twitter'] != "") { ?>
                  <a href="<?= $umPerfil['twitter'] ?>" class="btn btn-outline-primary border-0"><i class="bi bi-twitter"></i></a>
                <?php } ?>

                <?php if ($umPerfil['facebook'] != "") { ?>
                  <a href="<?= $umPerfil['facebook'] ?>" class="btn btn-outline-primary border-0"><i class="bi bi-facebook"></i></a>
                <?php } ?>

                <?php if ($umPerfil['linkedin'] != "") { ?>
                  <a href="<?= $umPerfil['linkedin'] ?>" class="btn btn-outline-primary border-0"><i class="bi bi-linkedin"></i></a>
                <?php } ?>

                <?php if ($umPerfil['youtube'] != "") { ?>
                  <a href="<?= $umPerfil['youtube'] ?>" class="btn btn-outline-danger border-0"><i class="bi bi-youtube"></i></a>
                <?php } ?>
              </div>
            </div>
          </div>

        <?php
          //  var_dump($umPerfil);
        }
        mysqli_close($conexao);
        ?>

      </div>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- fim conteudo -->
</body>

</html>