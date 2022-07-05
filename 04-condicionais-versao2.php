<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP (versão 2)</title>

    <style>
        .aprovado { color: blue; }
        .reprovado { color: red; }
        .recuperacao { color: green; }
        .assunto {color: blueviolet; }
    </style>

</head>
<body>

<h1>Condicionais (versão 2)</h1>
<hr>

<!-- --------------------------------------------------------------- -->

<h2>Condicional simples - só IF</h2>

<?php

$numero = 5;
$outronumero = 1;

    if( $numero > $outronumero){   /* inicio do if */

?>        
    
    <p><?=$numero?> é maior que <?=$outronumero?>!</p>

<?php

}  /* fim do if */

?>

<!-- ----------------------------------------------------------------- -->

<h2>Condicional composta - IF/ELSE</h2>

<?php

$nota1 = 7; /* 7 */
$nota2 = 9; /* 9 */
$media = ($nota1 + $nota2) / 2;

?>

<p>Média de notas: <?=$media?></p>

<?php

if( $media >= 7 ) {

?>

    <p class="aprovado">Aprovado</p>

<?php

} else {

?>

    <p class="reprovado">Reprovado</p>";

<?php

}

?>

<!-- ------------------------------------------------------------------ -->

<h2>Condicional encadeada</h2>

<p>Média de notas: <?=$media?></p>

<?php

if( $media >= 7 ){

?>  

    <p class="aprovado">Aprovado</p>

<?php

} elseif ( $media >= 6 && $media <7){

?>

    <p class="recuperacao">Recuperação</p>
    
<?php

} else {

?>

    <p class="reprovado">Reprovado</p>

<?php

}

?>

<!-- -------------------------------------------------------------------- -->

<h2>switch/case</h2>

<?php

$opcao = 1;

switch($opcao){

    case 1: $assunto = "Reclamação"; break;
    case 2: $assunto = "Elogio"; break;
    case 3: $assunto = "Informações";break;
    default: $assunto = "Falar com atendente"; break;
}

?>

<p class="assunto"><?=$assunto?></p>

    
</body>
</html>