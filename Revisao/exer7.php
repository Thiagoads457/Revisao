<?php require_once ("cabecalho.php");?>

<h4>Cálculo Desempenho Projeto</h4>
<form action="exer7resp.php" method="POST">

<div class="row">
    <div class="col -md-6 col-lg-4">
        <label for="prazo_final">Dias para Finalização</label>
        <input type="number" id="prazo_final" name="prazo final" class="form-control" />
    </div>

    <div class="col -md-6 col-lg-4">
        <label for="qnt_atividade">Qnt. Atividade para o Projeto</label>
        <input type="number" id="qnt_atividade" name="qnt_atividade" class="form-control" />
    </div>  
</div>  

<div class="row">
    <div class="col -md-6 col-lg-4">
        <label for="atv_desenvolvida">Qnt. de Atividades Desenvolvidas</label>
        <input type="number" id="atv_desenvolvida" name="atv_desenvolvida" class="form-control" />
    </div>
    
    <div class="col -md-6 col-lg-4">
        <label for="atv_desenvolvida_equipe">Qnt. de Atividades Desenvolvidas pela Equipe</label>
        <input type="number" id="atv_desenvolvida_equipe" name="atv_desenvolvida_equipe" class="form-control" />
    </div>  

</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>