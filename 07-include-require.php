<!-- chamando o arquivo 08-recursos.php, para executar comandos, deste arquivo -->

<?php
    include "recursos_include.php"
?>

<!-- ----------------------------------------------------- -->

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>

</head>
<body>

    
    <!-- chamando o arquivo 08-recursos.php, para executar comandos, deste arquivo -->
    <!-- inicio do arquivo, linhas 1, 2, 3, 4, 5 -->
    <h1>Inclusão de recursos</h1>
    <hr>


<!-- --------------------------------------------------- -->

    <h2> <?= escola ?> </h2>
    <p> Estamos no curso de <?= $curso ?> </P>
    <hr>

<!-- --------------------------------------------------- -->  

    <h2>foreach (loop) </h2>
    <p>loop esclusivo para arrays</p>

    <!-- Sintaxe usando função array numerico() -->

    <ol>

        <?php 
        foreach( $tecnologias as $tecnologia) {
        ?>

        <li> <?= $tecnologia ?> </li>

        <?php
        }
        ?>

    </ol>
    <hr>

<!-- ---------------------------------------------------- -->    

<!-- (int $valor confere se é maior idade e menor idade) -->
<!-- verificaIdade(20) é maior idade -->

<p>Chapolin colorado tem 20 anos e é 
    <b> <?= verificaIdade(20) ?> </b> de idade.
</p>


<p>Chaves tem 8 anos e é
    <b> <?= verificaIdade(8) ?> </b> de idade.
</p>
<hr>

<!-- ----------------------------------------------------- -->

<!-- importando conteudo de texto ou artigo de outros arquivos -->
<!-- Se o nome do arquivo estiver errado, o include permite que a pagina continue funcionando. -->

<article>
        <h2>Conteudo qualquer...</h2>
        <?php include "textos_include.php" ?>
</article>

<!-- ---------------------------------------------------- -->


<!-- importando conteudo de texto ou artigo de outros arquivos -->
<!-- Se o nome do arquivo estiver errado, o require não permite que a pagina continue funcionando.  -->

<article>
        <h2>Conteudo qualquer...</h2>
        <?php require "textos_include.php" ?>
</article>

<!-- ---------------------------------------------------- -->

  
<!-- recursos_include.php - 07-include-require.php - texto_include.php - lista_include.html  -->

</body>
</html>