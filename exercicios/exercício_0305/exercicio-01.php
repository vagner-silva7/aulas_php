<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-01</title>

    <!-- Exercício 01

    Criar variáveis e/ou constantes para:

    Data de hoje
    Nome de uma pessoa
    Idade da pessoa
    Cidade em que nasceu

    Coloque dados nestas variáveis/constantes e faça com que o script mostre no HTML 
    uma mensagem semelhante ao exemplo abaixo:

    Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em São Paulo -->

</head>
<body>

    <h1>Exercicio-01</h1>
    <hr>

<?php

    //variavel
    $datahoje = date("d/m/Y");
    /* ou $datahoje = "26/04/2022" */
    
    $nome = "Vagner";
    /* ou const NOME = "Vagner"     */
    
    $idade = 50 ;
 
    $cidade = "São Paulo"
    /* ou const CIDADE = "São Paulo"    */

?>

    <p>Hoje é <?=$datahoje?>. <?=$nome?> tem <?=$idade?> anos e nasceu em <?=$cidade?>.

</body>
</html>
