<?php

function calcularTempo($hora_entrada,$hora_saida){
    $hora_entrada = new DateTime($hora_entrada);
    $hora_saida = new DateTime($hora_saida);
    
    $resultado = $hora_saida->diff($hora_entrada);
    $resultado = $resultado->format("%H:%I");
    return $resultado;
}

function calcularSalarioSemanal($hora_mes, $valor_hora) {
    $semanasMes = 4.5;
    $horasSemana = $hora_mes / $semanasMes;
    $salarioSemanal = $horasSemana * $valor_hora;
    return $salarioSemanal;
}

function calcular_bonus($lucro_empresa, $desempenho){

    $percentual_bonus = 0.1 + ($desempenho - 1) * 0.15;

    $bonus = $lucro_empresa * $percentual_bonus /100;

    return $bonus;

}

function pode_realizar($hora_tarefa, $complexidade_tarefa, $hora_disponivel, $nivel_experiencia, $nome_funcionario, $nome_tarefa) {
    $hora_tarefa = floatval($hora_tarefa);
    $hora_disponivel = floatval($hora_disponivel);
    $hora_minima = $hora_tarefa * 1.1; 
    
    if ($hora_disponivel < $hora_minima) {
        return "$nome_funcionario não tem horas suficientes para a tarefa $nome_tarefa.";
    }
    
    if ($nivel_experiencia == 'junior' && $complexidade_tarefa != 'baixa') {
        return "$nome_funcionario (Junior) não pode assumir a tarefa $nome_tarefa de complexidade $complexidade_tarefa.";
    } elseif ($nivel_experiencia == 'pleno' && $complexidade_tarefa == 'alta') {
        return "$nome_funcionario (Pleno) não pode assumir a tarefa $nome_tarefa de complexidade alta.";
    } elseif ($nivel_experiencia == 'senior' && $complexidade_tarefa == 'baixa') {
        return "$nome_funcionario (Sênior) deveria priorizar tarefas de complexidade média ou alta.";
    }

    
    return "$nome_funcionario pode assumir a tarefa $nome_tarefa.";
}


function calcular_dias_ferias($dias_trabalhados) {
   
    $dias_ferias = intdiv($dias_trabalhados, 30); 

    
    if ($dias_ferias > 30) {
        $dias_ferias = 30;
    }

    return $dias_ferias;
}


function calcular_projeto($hora_prevista, $valor_hora, $custo_adicional){

    $custo = ($hora_prevista * $valor_hora) + $custo_adicional;

    return $custo;

}

function calcular_desempenho($qnt_atividade, $atv_desenvolvida, $atv_desenvolda_equipe, $prazo_final){

    $total = $qnt_atividade - $atv_desenvolvida;
    if($qnt_atividade > $atv_desenvolvida && $qnt_atividade > $atv_desenvolda_equipe){
        return "Projeto não finalizado, falta(m) $total atividade(s) para ser(em) finalizada(s) em $prazo_final dias. " ;
    }

}

