<?php

function calcularTempo($hora_entrada,$hora_saida){
    $hora_entrada = new DateTime($hora_entrada);
    $hora_saida = new DateTime($hora_saida);
    
    $resultado = $hora_saida->diff($hora_entrada);
    $resultado = $resultado->format("%H:%I");
    return $resultado;
}