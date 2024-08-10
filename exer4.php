<?php require_once ("cabecalho.php");?>

<h4>Cálculo Disponibilidade Funcionário</h4>
<form action="exer3resp.php" method="POST">

<div class="row">
    <div class="col">
        <label for="nome_tarefa">Tarefa</label>
        <input type="text" id="nome_tarefa" name="nome_tarefa" class="form-control" />
    </div>

    <div class="col">
        <label for="hora_tarefa">Total de Horas</label>
        <input type="text" id="hora_tarefa" name="hora_tarefa" class="form-control" />
    </div>    

    <div class="col">
        <label for="complexidade_tarefa">Complexidade</label>
        <select id="complexidade_tarefa" name="complexidade_tarefa" class="form-control">
        <option value="">Selecione</option>
        <option value="alta">Alta</option>
        <option value="media">Média</option>
        <option value="baixa">Baixa</option>
    </select>
    </div>  
</div>

<div class="row mt-3">
    <div class="col">
        <label for="nome_funcionario">Funcionário</label>
        <input type="text" id="nome_funcionario" name="nome_funcionario" class="form-control" />
    </div>

    <div class="col">
        <label for="hora_disponivel">Disponibilidade de Horas</label>
        <input type="text" id="hora_tarefa" name="hora_disponivel" class="form-control" />
    </div>    

    <div class="col">
        <label for="nivel_experiencia">Experiência</label>
        <select id="nivel_experiencia" name="nivel_experiencia" class="form-control">
        <option value="">Selecione</option>
        <option value="alta">Junior</option>
        <option value="media">Pleno</option>
        <option value="baixa">Senior</option>
    </select>
    </div>  
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success mt-2"> Calcular </button>
</div>

</form>
<?php


    

require("rodape.php"); ?>