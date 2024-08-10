<?php

require_once "cabecalho.php";

$hora_mes = $_POST['hora_mes'];
$valor_hora = $_POST['valor_hora'];

$salario = calcularSalarioSemanal($hora_mes, $valor_hora);
$salarioFormatado = number_format($salario, 2, ',', '.');

echo "<p>O salário semanal é de R$ " . $salarioFormatado . "</p>";

require_once "rodape.php";
