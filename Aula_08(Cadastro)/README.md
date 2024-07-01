# O que foi trabalhado nessa atividade

Hoje trabalhamos com a inserção de dados em um banco de dados usando o PHP

``` php
// Define o usuario e a senha
$user = $_POST['usuario'];
$password = $_POST['senha'];

// Define uma conexão com um banco local
$conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");

// Esse é o script para inserir no banco
// Os campos que tem :usuario e o :senha 
$script = "INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)";

// Normalmente chamado de $smtm, vai preparar o script para ser inserido no banco
$preparo = $conn->prepare($script);

// vai ser usado para substituir os valores do :usuario pelo variavel $user e :senha por $password
$var = [
    ':usuario'  => $user,
    ':senha'     => $password
];

// Então finalmente vai ser executado e inserido no banco
// Ele tem que ter um array dentro dele, nesse caso ele passa o $var, que faz a substituição
$preparo->execute($var);
```

Foi deixado um extra de como fazer para que ele valide se a senha é a mesma, e se o usuário ja existe no banco, eu fiz desse jeito:

``` php
$user = $_POST['usuario'];
$password = $_POST['senha'];
$passwordConfirm = $_POST['confirmarSenha'];

// Aqui fazemos um comnparação dos campos de senha, caso sejam diferentes ele avisa para inserir a mesma senha
if ($password != $passwordConfirm) { 
    echo 'Por favor, insira a mesma senha';
}else {
    $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
    // Aqui fazemos uma busca no banco pelos usuários ja existentes
    $scriptRead = "SELECT * FROM tb_usuario WHERE usuario = '{$user}'";
    $resultado = $conn->query($scriptRead)->fetch();

    // Então fazemos uma comparação entre o usuario do banco e o do campo input, ambas strings deixadas em minusculos
    if (strtolower($resultado['usuario']) == strtolower($user)) {
        echo 'Usuario ja existe';
    } else {
        $scriptCreate = "INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)";
        $preparo = $conn->prepare($scriptCreate);
        $var = [
            ':usuario'  => $user,
            ':senha'    => $password
        ];
        $preparo->execute($var);
        echo 'Usuario criado com sucesso';
    }
}
```
