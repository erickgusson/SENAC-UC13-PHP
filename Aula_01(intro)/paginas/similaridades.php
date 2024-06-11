<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php // Tag para trabalhar com PHP

    echo "<h1>Olá PHP</h1>";

    // Similaridades entre PHP e C#
    // O comentário é feito da mesma forma com // ou /* */

    $texto = "Erick";
    // concatenação "."
    echo "Bom dia Usuário: " . $texto . ", também conhecido como: O Mais Sexy<br>";

    // var_dump($texto); //Serve para verificar o tipo e conteudo da variavel

    // Condições
    if (1 != 1) {
        echo "IF";
    } elseif (2 != 2) {
        echo "ELSE IF";
    } else {
        echo "ELSE";
    }

    // Ternairo
    // condição ? verdadeiro : falso
    echo "<br>";
    $reposta = $texto != "" ? "Ternario deu bom" : "Ternario deu ruim";
    echo $reposta;

    // For e while
    echo "<br>";
    for ($cont=0; $cont < 5; $cont++) { 
        echo $cont . "<br>";
    }

    $contador = 0;
    while ($contador <= 10) {
        echo " conta ";
        echo $contador;
        $contador++;
    }
    
    function Erick() {
        echo "<br> Pega a visão da função funcional ";
    }
    
    Erick();

    ?>

</body>

</html>