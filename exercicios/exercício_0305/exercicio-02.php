<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 02</title>

<!-- Exercício 02 - Arrays

Crie um arquivo chamado exercicio02-arrays.php.

Nele, crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome, idade, email e sexo.

Em seguida, mostre os valores de nome, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).

Desafio: destaque estes blocos de conteúdo usando CSS. -->

</head>
<body>

    <h1>Exercicio-02</h1>
    <hr>

<?php

    /* Array numerico */

    $pessoa1 = ["Jose", 50, "Jose@hotmail.com", "Masculino"];

    $pessoa2 = ["Maria", 40,"Maria@gmail.com", "Feminino"];

    /* Array associativo */

    $aluno_a = [
        "nome" => "Jose",
        "idade" => 50,
        "email" => "Jose@hotmail.com",
        "Sexo" => "Masculino"
    ];
    
    $aluno_b = [
        "nome" => "Maria",
        "idade" => 40,
        "email" => "Maria@gmail.com",
        "Sexo" => "Feminino"
    ];
?>
    
    
    <!-- Resposta pelo array associativo -->

    <article>

        <h2>Dados</h2>
        
        <section> <!-- acessando array numérico -->
            <h3><?=$pessoa1[0]?></h3>
            <p><?=$pessoa1[1]?></p>
            <p><?=$pessoa1[2]?></p>
        </section>

        <section> <!-- acessando array numérico -->
            <h3><?=$pessoa2[0]?></h3>
            <p><?=$pessoa2[1]?></p>
            <p><?=$pessoa2[2]?></p>
        </section>

        <section> <!-- acessando array associativo -->
            <h3><?=$aluno_a["nome"]?></h3>
            <p><?=$aluno_a["idade"]?></p>
            <p><?=$aluno_a["email"]?></p>
        </section>

        <section> <!-- acessando array associativo -->
            <h3><?=$aluno_b["nome"]?></h3>
            <p><?=$aluno_b["idade"]?></p>
            <p><?=$aluno_b["email"]?></p>
        </section>

    </article>
    
</body>
</html>