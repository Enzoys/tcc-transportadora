<?php
    include "Confere_2.php";
?>
<?php
    include ('cabecalho2.php')
?>

<title>Pesquisar Empresas</title>

<div id="bgimg" style="padding-left:30%;padding-right:30%;padding-top:5%;padding-bottom:10%;" id="invictax">
<h1 style="color:white; text-align:center;" class="badge-primary text-wrap" >Escolha o metodo de busca:</h1>
<div id="bgtxt">
<form method="post" action="PesquisaCliEmpresaNome.php">
<table style="color:#4287f5; width:100%;" class="table">
<thead class="thead-dark">
  <tr>
    </tr>
    </thead>
  <tbody>
    <tr>
      <th style="color:white; text-align:center;" scope="row"><label>NOME:   </label><input type="text" size="40" name="txtcliente"><br><input style="margin-top:20px;" class="btn btn-primary btn-lg" type="submit" name="Enviar">  </th>
    </tr>
</form>
<form method="post" action="PesquisaCliEmpresaCnpj.php">
<tr>
      <th style="color:white; text-align:center;" scope="row"><label>CNPJ:   </label><input type="text" size="40" name="txtcliente"><br><input style="margin-top:20px;" class="btn btn-secondary btn-lg" type="submit" name="Enviar"> </th>
    </tr>
</form>
<form method="post" action="PesquisaCliEmpresaID.php">
<tr>
      <th style="color:white; text-align:center;" scope="row"><label>ID:   </label><input  type="text" size="40" name="txtcliente"><br><input style="margin-top:20px;" class="btn btn-primary btn-lg" type="submit" name="Enviar"> </th>
    </tr>             
</form>
            <button style="margin-bottom:20px;" class="btn btn-secondary btn-lg" onclick="window.open('PagFuncListarCliEmpresas.php')">LISTAR TODOS</button>
<?php
    include ('rodape.php');
?>