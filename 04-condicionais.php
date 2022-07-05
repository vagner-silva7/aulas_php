<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>

    <style>
        .aprovado { color: blue; }
        .reprovado { color: red; }
        .recuperação { color: green; }
        .assunto {color: blueviolet; }
    </style>

</head>
<body>

<h1>Condicionais</h1>
<hr>

<!-- --------------------------------------------------- -->

<h2>Condicional simples - só IF</h2>

<?php

$numero = 5;
$outronumero = 1;

    if( $numero > $outronumero){
    echo "<p>$numero é maior que $outronumero!</p>";
    }

?>

<!-- --------------------------------------------------- -->

<h2>Condicional composta - IF/ELSE</h2>

<?php

$nota1 = 7; /* 7 */
$nota2 = 9; /* 9 */
$media = ($nota1 + $nota2) / 2;

echo "<p>Média de notas: $media</p>";

if( $media >= 7 ) {
    echo "<p class=\"aprovado\">Aprovado</p>";
} else {
    echo "<p class=\"reprovado\">Reprovado</p>";
}

?>

<!-- --------------------------------------------------- -->

<h2>Condicional encadeada</h2>

<?php

echo "<p>Média de notas: $media</p>";

if( $media >= 7 ){
    echo "<p class=\"aprovado\">Aprovado</p>";
} elseif ( $media >= 6 && $media <7){
    echo "<p class=\"recuperação\">Recuperação</p>";
} else {
    echo "<p class=\"reprovado\">Reprovado</p>";
}

?>

<!-- ---------------------------------------------------- -->

<h2>switch/case</h2>

<?php

$opcao = 1;

switch($opcao){
    case 1: $assunto = "Reclamação"; break;
    case 2: $assunto = "Elogio"; break;
    case 3: $assunto = "Informações";break;
    default: $assunto = "Falar com atendente"; break;
}

echo "<p class=\"assunto\">$assunto</p>";

?>

    
</body>
</html>