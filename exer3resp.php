<?php

require_once "cabecalho.php";

$lucro_empresa = $_POST['lucro_empresa'];
$nome_funcionario = $_POST['nome_funcionario'];
$desempenho = $_POST['desempenho'];
$bonus = calcular_bonus($lucro_empresa, $desempenho);
$bonusFormatado = number_format($bonus, 2, ',', '.');

echo "<p>O bônus anual do funcionário $nome_funcionario é de R$ " . $bonusFormatado . "</p>";

require_once "rodape.php";