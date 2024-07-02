<?php
class Usuario
{
    public function CadastroUsuario($user, $password, $passwordConfirm)
    {
        try {

            if (empty($user) || $user == null) {
                return "<br>Usuário não informado";
            }

            if (empty($password) || $password == null) {
                return "<br>Senha não informada";
            }

            if ($password != $passwordConfirm) {
                return "<br>Senhas não são iguias";
            }

            $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
            $script = "INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)";
            $preparo = $conn->prepare($script);
            $var = [
                ':usuario' => $user,
                ':senha' => $password
            ];
            $preparo->execute($var);
            return "Usuário cadastrado com sucesso id: " . $conn->lastInsertId();
        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
    }

    public function ValidarUsuario($user, $password)
    {
        $conn = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
        $script = "SELECT * FROM tb_usuario WHERE usuario = '{$user}' AND senha = '{$password}'";
        $resultado = $conn->query($script)->fetch();
        if (!empty($resultado)) {
            echo 'Usuario Validado com sucesso!!!';
            header('location:lista.php');
        } else {
            echo '<p class="alert alert-danger">Usuario não encontrado.</p>';
        }
    }

    public function ListarUsuarios()
    {
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "SELECT * FROM tb_usuario";

        $lista = $conn->query($script)->fetchAll();

        return $lista;
    }

    public function DeletarUsuario($id_delete)
    {
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "DELETE FROM tb_usuario WHERE id = :id";

        $preparo = $conn->prepare($script);

        $preparo->execute([
            ":id" => $id_delete
        ]);

        return $preparo->rowCount();
    }
}
