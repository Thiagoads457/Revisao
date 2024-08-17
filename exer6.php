<?php require_once ("cabecalho.php");?>

<h4>Cálculo Custo Projeto</h4>
<form action="exer6resp.php" method="POST">

<div class="row">
    <div class="col">
        <label for="hora_prevista">Horas Previstas</label>
        <input type="number" id="hora_prevista" name="hora_prevista" class="form-control" />
    </div>

    <div class="col">
        <label for="taxa_hora">Valor por Hora</label>
        <input type="number" id="taxa_hora" name="taxa_hora" class="form-control" placeholder="R$" />
    </div>    

    <div class="col">
        <label for="custo_adicional">Custo Adicional</label>
        <input type="number" id="custo_adicional" name="custo_adicional" class="form-control" placeholder="R$" />
    </div>  
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>