<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados do formulario</title>
</head>
<body>

    <h1>Processamento de dados</h1>
    <hr>

<?php

if ( empty ($_POST["nome"]) || empty ($_POST["email"])  ) {

?> 

    <p style="color:red"> Por favor, preencher os campos nome e e-mail. </p>
    <p> <a href="08-formulario.html"> Voltar </a> </p>

<?php

} else {

    /* capturando os dados enviados a partir do formulario */
    /* array associativo */

    /* PARA TESTES */

    /* echo "<pre>"; */
    /* var_dump($_POST);   */
    /* echo "<pre>"; */


    /* se for pegar somente um dado - COM LISTAS*/

    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $idade = $_POST ["idade"];
    /* se existe o $_POST ["interesses"],
    o que foi selecionado fica na variavel,
    caso contrario (array vazio) fica na variavel ?? [] */
    $interesses = $_POST ["interesses"]  ?? []; 
    $informativos = $_POST ["informativos"];
    $mensagem = $_POST ["mensagem"];


?> 

    <h2>Dados:</h2>
        <ul>
            <li> Nome:<?= $nome ?> </li>
            <li> E-mail:<?= $email ?> </li>
            <li> Idade: <?= $idade ?> </li>

            <!-- Condicional PHP 
            (   e sinalizado como &&   ), 
            (   ou sinalizado como ||   ),
            (   não sinalizado como !   ) invertendo o sim 
            pelo não e o não pelo sim-->

            <!-- Se estiver em branco, o campo de interesses ou 
            se não estiver vazio ( operador coalescencia nula - 
            interrogação dupla ( ?? ) -->

            <?php if ( ! empty ( $interesses ) ) { ?>

                <!-- entaão faça isso -->
                
            <li> Interesses:  
                    <ul>
                        <?php foreach($interesses as $interesse) { ?>
                            <li> <?= $interesse ?> </li>
                        <?php  }   ?>    
                    </ul>
            </li>

            <?php } ?>


            <li> Informativos: <?= $informativos ?> </li>
            <li> Mensagem: <?= $mensagem ?> </li>
        </ul>

<?php } ?>
    
</body>
</html>