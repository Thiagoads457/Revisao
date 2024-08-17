<?php

require_once "cabecalho.php";

$hora_prevista = $_POST['hora_prevista'];
$valor_hora = $_POST['valor_hora'];
$custo_adicional = $_POST['custo_adicional'];

echo "<p>Custo total do Projeto: ". calcular_projeto($hora_prevista, $valor_hora, $custo_adicional)."</p>";




require_once "rodape.php";
