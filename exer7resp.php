<?php

    require_once"cabecalho.php";

    $qnt_atividade = $_POST['qnt_atividade'];
    $atv_desenvolvida = $_POST['atv_desenvolvida'];
    $atv_desenvolda_equipe = $_POST['atv_desenvolvida_equipe'];
    $prazo_final = $_POST['prazo_final'];

    echo calcular_desempenho($qnt_atividade, $atv_desenvolvida, $atv_desenvolda_equipe, $prazo_final);


    require_once "rodape.php";