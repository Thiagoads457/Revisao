<?php require_once ("cabecalho.php");?>

<h4>Cálculo Bônus Anual</h4>
<form action="exer3resp.php" method="POST">

<div class="row">
    <div class="col">
        <label for="lucro_empresa">Lucros da Empresa</label>
        <input type="number" id="lucro_empresa" name="lucro_empresa" class="form-control" placeholder="R$" />
    </div>

    <div class="col">
        <label for="nome_funcionario">Nome do Funcionário</label>
        <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" />
    </div>    

    <div class="col">
        <label for="desempenho">Escala de Desempenho (1 a 5)</label>
        <input type="number" id="desempenho" name="desempenho" class="form-control" />
    </div>  
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>