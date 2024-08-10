<?php require_once("cabecalho.php"); ?>

<h4>Cálculo Total de Horas Trabalhadas</h4>
<form action="exer1resp.php" method="POST">

<div class="row">
    <div class="col">
        <label for="hora_entrada">Hora de Entrada</label>
        <input type="time" id="hora_entrada" name="hora_entrada" class="form-control" />
    </div>

    <div class="col">
        <label for="hora_saida">Hora de Saida</label>
        <input type="time" id="hora_saida" name="hora_saida" class="form-control" />
    </div>    
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>