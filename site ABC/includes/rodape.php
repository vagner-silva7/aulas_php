</main>

<footer>

    <p>Site desenvolvido como exemplo de aula</p>


    <?php

    date_default_timezone_set("America/Sao_Paulo");
    $data = date ("d/m/Y - H:i:s");

    ?>

    <p> <?= $data ?> </p>

</footer>


</body>
</html>