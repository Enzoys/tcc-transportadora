<?php
    include "confere_2.php";
?> 
<?php
    include ('cabecalho2.php')
?>
<title>Pesquisar Clientes</title>           
        <!--<a href="PagFuncCliPessoas.php">MENU ANTERIOR</a><br><br>-->
        <div id="bgimg" style="padding-left:30%;padding-right:30%;padding-top:5%;padding-bottom:10%;" id="invictax">
<h1 style="color:white; text-align:center;" class="badge-primary text-wrap" >Escolha o metodo de busca:</h1>
<div id="bgtxt">
<form method="post" action="PesquisaCliPessoaNome.php">
<table style="color:#4287f5; width:100%;" class="table">
  <thead class="thead-dark">
  <tr>
    </tr>
    </thead>
  <tbody>
    <tr>
      <th style="color:white; text-align:center;" scope="row"><label>NOME:   </label><input type="text" style="margin-top:20px;"     size="40" name="txtcliente"><br><input style="margin-top:20px;" class="btn btn-primary btn-lg" type="submit" name="Enviar"> </th>
    </tr>
    </form>
    <form method="post" action="PesquisaCliPessoaCpf.php">
    <tr>
        <th style="color:white; text-align:center;" scope="row"><label>CPF:</label><input type="text" style="margin-top:20px;" size="40" name="txtcliente"><br><input style="margin-top:20px;" class="btn btn-secondary btn-lg" type="submit" name="Enviar"> 
        </th>
    </tr>
    </form>
    <form method="post" action="PesquisaCliPessoaID.php">
                <tr>
                <th style="color:white; text-align:center;" scope="row"><label>ID:  </label>
                <input type="text" style="margin-top:20px;" size="40" name="txtcliente"><br>
                <input style="margin-top:20px;" class="btn btn-primary btn-lg" type="submit" name="Enviar">
                </th>
                </tr>
            </form>
            <button  style="margin-bottom:20px;" class="btn btn-secondary btn-lg" onclick="window.location.href="PagFuncListarCliPessoas.php">LISTAR TODOS</button>
