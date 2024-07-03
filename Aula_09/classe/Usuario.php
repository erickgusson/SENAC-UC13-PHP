<?php
class Usuario
{
    public function CadastroUsuario($user, $password, $passwordConfirm, $pessoaId)
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
            $script = "INSERT INTO tb_usuario (usuario, senha, id_pessoa) VALUE (:usuario, :senha, :id_pessoa)";
            $preparo = $conn->prepare($script);
            $var = [
                ':usuario' => $user,
                ':senha' => $password,
                'id_pessoa' => $pessoaId
            ];
            $preparo->execute($var);
            return "Usuário cadastrado com sucesso id: " . $conn->lastInsertId();
        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
    }

    public function AtualizarUsuario($id_para_alterar, $user, $password, $passwordConfirm) {
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
        $script = "UPDATE tb_usuario SET usuario = :usuario, senha = :senha WHERE id = :id";
        $preparo = $conn->prepare($script);
        
        $preparo->execute([
            ":usuario" => $user,
            ":senha" => $password,
            ":id" => $id_para_alterar
        ]);
        return "Usuário atualizado com sucesso <br> id: {$id_para_alterar} <br> novo nome: {$user} <br> nova senha: {$password} ";
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

    public function Listar1Usuario($id_consulta)
    {
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "SELECT * FROM tb_usuario WHERE id = '{$id_consulta}'";

        $lista = $conn->query($script)->fetch();

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
