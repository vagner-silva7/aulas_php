<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    
    <h1>Loop ou repetição</h1>
    <hr>

<!-- -------------------------------------------------------------------------------- -->    

    <h2>While (enquanto)</h2>

<?php    

$i = 1;

while ( $i <= 3 ) { //$i = 4

?>

    <p> <?=$i?> </p>

<?php

    $i++;
    }    /* atualizar a variavel */

?>

<!-- --------------------------------------------------------------------------------- -->


    <h2>do/while (faça/enquanto)</h2>

<?php

$j = 1;

do {

?> 

    <div style="border: solid 1px">
        <h3> Exemplo <?=$j?> </h3>
    </div>

<?php

    $j++;

} while($j <= 5);

?>

<!-- ------------------------------------------------------------------------------ -->

    <h2>for (para)</h2>

<?php

     /* inicializando a variavel; condição da variavel; atualização da variavel */
for ( $i = 1; $i <= 3; $i++ ){

?>

    <p> Valor de i é <b><?=$i?></b> </p>

<?php

}

?>

<!-- -------------------------------------------------------------------------------- -->

    <h2>Exercicio Array e Loop</h2>
    <p>Crie um array contendo os nomes dos 12 meses do ano.</p>
    <p>Usando o loop, faça o nome dos meses aparecer em uma lista ordenada</p>

    <?php

         // Sintaxe usando função array numerico()

        $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    ?>

        <ol>
            
            <?php   
            for ( $i = 0; $i < 12; $i++ ){   
            ?>
           
            <li> <?= $meses[$i] ?> </li>

            <?php 
            } 
            ?>

        </ol>

            <!-- ou -->

        <ol>    
          
            <?php
            for ( $i = 0; $i < count($meses); $i++ ){  
            ?> 
           
            <li> <?= $meses[$i] ?> </li> 

            <?php
            }
            ?>

        </ol>

<!-- --------------------------------------------------------------------------- -->

    <h2>foreach (para cada)</h2>
    <p>loop esclusivo para arrays</p>

    <?php

         // Sintaxe usando função array numerico()

        $mesesA = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    ?>

        <ol>

            <?php 
            foreach($mesesA as $mes) {
            ?>

            <li> <?= $mes ?> </li>

            <?php
            }
            ?>

        </ol>

<!-- ------------------------------------------------------ -->

    <h2>Array associativo</h2>
    <P>Formado por pares => valor</P>

    <?php

        // chave (key) => valor (value)

    $curso = [
        "nome" => "Programação Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "UCS" => 5
    ];

    foreach( $curso as $chaves_dados => $valor ) {

    ?>

        <p> <?= $chaves_dados ?> - <?= $valor ?> </p>
    
    <?php
    }
    ?>

<!-- ------------------------------------------------------- -->

</body>
</html>    