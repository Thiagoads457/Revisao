<?php

require_once "cabecalho.php";

$nome_tarefa = $_POST['nome_tarefa'];
$hora_tarefa = $_POST['hora_tarefa'];
$complexidade_tarefa = $_POST['complexidade_tarefa'];
$hora_disponivel = $_POST['hora_disponivel'];
$nivel_experiencia = $_POST['nivel_experiencia'];
$nome_funcionario = $_POST['nome_funcionario'];

$realizar_tarefa = pode_realizar($nome_tarefa, $hora_tarefa, $complexidade_tarefa, $nome_funcionario, $hora_disponivel, $nivel_experiencia);

echo $realizar_tarefa;

require_once "rodape.php";


