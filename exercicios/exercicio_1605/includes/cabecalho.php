<!-- Inserir o nome para titulo de acordo com cada pagina -->

<!-- Parte 1: Identificar o arquivo aberto
$_SERVER[´PHP_SELF´] -> traz os dados completo do endereço da pagina
basename($_SERVER[´PHP_SELF´] -> Eextrai apenas o nome.extensão-->

<?php
    $pagina = basename ( $_SERVER['PHP_SELF']);
    // echo $pagina;

/* Parte 2: Condicional para avaliar qual pagina está aberta
e defini qual titulo usar */

    switch ( $pagina ) {
        case 'index.php':$titulo = "Pagina inicial"; Break;
        case 'formulario.php':$titulo = "Formulario"; Break;
        default: $titulo = "Contato"; break; 
    }

    // echo $titulo
?>

<!-- --------------------------------------------------- -->

<!--  HTML  -->

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- Parte 3: Colocar o nome do arquivo (variavel)
no titulo da pagina-->    
    
    <title> <?= $titulo ?> - Site Sol - Digitações</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <header>
        <h1>Sol - Digitações</h1>

        <hr>
        
        <Nav>
            <a href="index.php">Home</a>
            <a href="formulario.php">Formulario</a>
            <a href="contato.php">Contato</a>
        </Nav>
    </header>

    <main>