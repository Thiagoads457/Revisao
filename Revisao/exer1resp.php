<?php

    require_once"cabecalho.php";

    $hora_entrada = $_POST['hora_entrada'];
    $hora_saida = $_POST['hora_saida'];

    echo "<p>Resposta: ".calcularTempo($hora_entrada, $hora_saida)."</p>";


    require_once "rodape.php";


    