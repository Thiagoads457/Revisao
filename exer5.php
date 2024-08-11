<?php require_once("cabecalho.php"); ?>

<h4>Cálculo de Férias</h4>
<form action="exer5resp.php" method="POST">

<div class="row">
    <div class="col -md-6 col-lg-2">
        <label for="dias_trabalhados">Dias Trabalhados</label>
        <input type="number" id="dias_trabalhados" name="dias_trabalhados" class="form-control" />
    </div>
        
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>