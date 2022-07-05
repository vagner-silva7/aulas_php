<!-- recursos_include php -->

<?php

const escola = "Senac";
$curso = "Programador Web";
$tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];  /* Arrays */

function verificaIdade ( int $valor ) : string {   /* (int $valor confere se é maior idade e menor idade) */
    if ( $valor >= 18 ) {
        return "maior";
    } else {
        return "menor";  
    }

}


/* <!--  recursos_include.php - 07-include-require.php - texto_include.php - lista_include.html  --> */
