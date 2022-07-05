<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>
    
    <h1>Usando Arrays no PHP</h1>
    <hr>

    <h2>Array com indice numerico</h2>

<?php

    // Sintaxe com colchete
    $alunos = ["Maria", "João", "Monica"];

    // Sintaxe usando função array()
    $cursos = array("HTML5", "React", "Node.js", "PHP");

?>

        <h3>Acessando os dados</h3>
    
            <ul>
        
                <li> <?= $alunos[2] ?> </li>
                <li> <?= $cursos[1] ?> </li>

            </ul>

        <hr> 

    <h2> Array associativo</h2>

<?php

    $curso = [
        "nome" => "Programação Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "UCS" => 5
    ];

?>

    <p> O curso de <?= $curso["nome"] ?> tem <?= $curso["carga_horaria"] ?> horas.
    
</p>

<hr>

<h2>Funções de teste ou debug</h2>

    <pre>
        <?=print_r($cursos)?>
    </pre>

    <pre>
        <?=var_dump($cursos)?>
    </pre>

</body>
</html>