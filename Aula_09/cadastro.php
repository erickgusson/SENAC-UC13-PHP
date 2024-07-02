<?php
include './includes/header.php';
include './classe/Usuario.php';

$usuario = new Usuario();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_alterar = $_GET['id'];

    $dadosUsuarios = $usuario -> Listar1Usuario($id_alterar);

    // var_dump($dadosUsuarios);

    // echo isset($id_alterar) ? $dadosUsuarios['usuario'] : '';
    
}

?>


<body class="d-flex align-items-center py-4 bg-body-tertiary cadastro">

    <main class="form-signin w-100 m-auto">
        <form action="auxcadastro.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">
                <?= isset($id_alterar) ? 'Alterar dados' : 'Dados de cadastro'; ?>
            </h1>

            <div class="form-floating my-2">
                <input value="<?= isset($id_alterar) ? $dadosUsuarios['usuario'] : ''; ?>"  <?= isset($id_alterar) ? 'Disabled' : ''; ?> type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating my-2">
                <input value="<?= isset($id_alterar) ? $dadosUsuarios['usuario'] : ''; ?>" type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                <label for="usuario">Usuario</label>
            </div>

            <div class="form-floating my-2">
                <input value="<?= isset($id_alterar) ? $dadosUsuarios['senha'] : ''; ?>" type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
                <label for="senha_c">Senha</label>
            </div>

            <div class="form-floating my-2">
                <input value="<?= isset($id_alterar) ? $dadosUsuarios['senha'] : ''; ?>" type="text" class="form-control" id="confirma" name="confirma" placeholder="Senha">
                <label for="confirma">Confirmar Senha</label>
            </div>

            <input class="btn btn-primary w-100 py-2 mt-5" type="submit" value="<?= isset($id_alterar) ? 'Alterar' : 'Cadastrar'; ?>">

            <p class="mt-5 mb-3 text-body-secondary">&copy; Aqui estamos mais um dia</p>
        </form>
    </main>

</body>

</html>