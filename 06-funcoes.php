<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>

    <h1>Funções no PHP</h1>
    <hr>

    <h2>Funções básicas (sem retorno)</h2>

<?php

// criando a função, podendo ser usado varias vezes depois de declarado
// Enquanto não chamar a função, ela não aparece

function dadosAutor(){
    echo "<div>";
    echo "<p> Vagner </p>";
    echo date("d/m/y");
    echo "</div>";
}

?>

<section>
    <p>Projeto de site Back-end</p>
    <!-- chamando a função -->
    <?= dadosAutor() ?>

</section>

<!-- ------------------------------------------------------------------------ -->

    <h2>Funções com retorno de dados</h2>

<?php

// criando a função, podendo ser usado varias vezes depois de declarado
// Enquanto não chamar a função, ela não aparece

function dadosCurso(){
    return "Programador Web - 240 horas";
}

?>

<p> Informações: <?= dadosCurso() ?> </p>
<p>O Senac Penha tem o curso <?= dadosCurso() ?> </P>

<!-- ---------------------------------------------------------------------- -->

    <h2>Funções com parâmetros/argumentos</h2>

<?php

// criando a função, podendo ser usado varias vezes depois de declarado
// Enquanto não chamar a função, ela não aparece
// parâmetros esta atrelado a fun~]ao e dentro do parenteses

function soma ( $valor1, $valor2 ){
    return $valor1 + $valor2;
}

?>

<p> <?= soma ( 150, 200 ) ?> </p>
<p> <?= soma ( 28, 87 ) ?> </p>


<!-- -------------------------------------------------------------------- -->

<?php

$primeiro = 1257.45;
$segundo = 10489;

?>

<!-- reaproveitando a função soma, com variaveis -->

<p> <?= soma ( $primeiro, $segundo) ?> </P>

<!-- ---------------------------------------------------------------------- -->

    <h2>Lista não ordenada - função: formatar numeros</h2>

<?php

$preco = 1578.99;
$desconto = 75.4789;
$salarioMinimo = 1212;
$novoSalario = 2500.47;


function formatar( $valor, $casasDecimais = 2)  {
    return "R$ " . number_format($valor, $casasDecimais, ",", ".");
    // number_format ( valor, numeros de casas decimais, separador decimais, separador milhar )
    // parametro com valor padrão ou default, exemplo $casas decimais = 2, na linha 110 mencionou numero de casas decimais com 3
}

?>

<ul>
    <li> Preço: <?= formatar ( $preco ) ?> </li>
    <li> Desconto: <?= formatar ( $desconto, 3 ) ?> </li>
    <li> Salario Minimo: <?= formatar ( $salarioMinimo ) ?> </li>
    <li> Novo Salario: <?= formatar ( $novoSalario ) ?> </li>
</ul>

<!-- -------------------------------------------------------------------------- -->

    <h2>Indução de tipos de dados</h2>

    <!-- indução dos parametros -->
    <!-- indução no retorno -->

    <!-- inteiros (valores inteiros), float (valores decimais), string (textos) -->
    
<?php

    function calculaMedia( float $nota1, float $nota2) : float {
        return ( $nota1 + $nota2) / 2;
    }

?>

<p> <?= calculaMedia ( 10 , 5 ) ?> </p>
<p> <?= calculaMedia ( 5.5 , 7.7 ) ?> </p>
<p> <?= calculaMedia ( 9.84 , 3.41 ) ?> </p>

</body>
</html>