<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>

    <h1>Manipulando dados na memória</h1>
    <hr>

<?php
    //variavel
    $curso = "Programador Web";
    $ano = 2022;
    $preco = 2500.42;

    echo "<h2>Saida de dados completa</h2>";
    echo "<p>$curso</p>";
    echo "<div>$ano</div>";
    echo "<p><b>$preco<?b></p>";
?>

    <h2>Saida de dados intercalando HTML e PHP</h2>

    <p> <?php echo $curso ?> </P>

    <h2>Sintaxe abreviada de saida</h2>
    <p> <?=$curso?> </p>  
    <div> <?=$ano?> </div>
    <p><b> <?=$preco?> </b></p>

    <p>Estamos fazendo o curso de <?=$curso?> no ano de <?=$ano?>


<?php

    // Constante (constantes com letras maiusculas no PHP)
    // nas constantes, precisa concatenar(ponto . )

    // Forma 1:
        define("MEU_NOME", "Tiago");

    // Forma 2:
        const ESCOLA = "Senac Penha";

    echo "<p>".MEU_NOME."</P>";
    echo "<p>".ESCOLA."</P>";
?>  

    <p> <?=MEU_NOME?> </p>
    <p> <?=ESCOLA?> </p>

</body>
</html>