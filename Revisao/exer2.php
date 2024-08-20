<?php require_once ("cabecalho.php");?>

<h4>Cálculo Salário Semanal</h4>
<form action="exer2resp.php" method="POST">

<div class="row">
    <div class="col">
        <label for="hora_mes">Horas Mensais Trabalhadas</label>
        <input type="number" id="hora_mes" name="hora_mes" class="form-control" />
    </div>

    <div class="col">
        <label for="valor_hora">Valor da Hora</label>
        <input type="number" id="valor_hora" name="valor_hora" class="form-control" placeholder="R$" />
    </div>    
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>







<?php
require("rodape.php");?>