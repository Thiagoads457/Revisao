<?php

    require_once"cabecalho.php";

    $dias_trabalhados = $_POST['dias_trabalhados'];

    echo "<p>Ferias totais: ". calcular_dias_ferias($dias_trabalhados)."</p>";


    require_once "rodape.php";