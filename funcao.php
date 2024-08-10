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