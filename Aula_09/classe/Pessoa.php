<?php
class Pessoa
{
    public function CadastroPessoa($pessoa)
    {
        try {

            if (empty($pessoa) || $pessoa == null) {
                return "<br>Pessoa não informado";
            }

            $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
            $script = "INSERT INTO tb_pessoa (nome) VALUE (:pessoa)";
            $preparo = $conn->prepare($script);
            
            $preparo->execute([
                ":pessoa" => $pessoa
            ]);
            return $conn->lastInsertId();
        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
    }

    public function AtualizarPessoa($id_pessoa, $pessoa) {
        if (empty($pessoa) || $pessoa == null) {
            return "<br>Pessoa não informado";
        }

        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "UPDATE tb_pessoa SET nome = :nome WHERE id = :id";
        $preparo = $conn->prepare($script);
        
        $preparo->execute([
            ":nome" => $pessoa,
            ":id" => $id_pessoa
        ]);
        return "Pessoa atualizado com sucesso <br> id: {$id_pessoa} <br> novo nome: {$pessoa} <br><br>";
    }

    public function Listar1Pessoa($id_consulta)
    {
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "SELECT * FROM tb_pessoa WHERE id = '{$id_consulta}'";

        $lista = $conn->query($script)->fetch();

        return $lista;
    }
}
