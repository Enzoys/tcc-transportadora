<?php
    include "confere_3.php";
    include "cabecalho2.php";
?>
<title>Pesquisar Funcionário</title>
<div id="bgimg" style="padding-left:30%;padding-right:30%;padding-top:12.5%;padding-bottom:10%;" id="invictax">
<h1 style="color:white; text-align:center;" class="badge-primary text-wrap" >Pesquisa Funcionário:</h1>
<div id="bgtxt">

    <form method="post" action="PesquisaFuncionarioCpf.php">
        <h4>Pesquisa por CPF do funcionário:</h4>
        <input type="text" size="40" name="txtfuncionarioCpf" />
        <input style="margin-top:20px;" class="btn btn-primary btn-lg" type="submit" name="Enviar" />
    </form>
    <form method="post" action="PesquisaFuncionarioNome.php">
    <h4> Pesquisa por nome do funcionário:</h4>
        <input type="text" size="40" name="txtfuncionarioNome" />
        <input style="margin-top:20px;" class="btn btn-secondary btn-lg" type="submit" name="Enviar" />
    </form>

<?php 
    include "rodape.php";
?>
