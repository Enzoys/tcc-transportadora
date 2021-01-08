<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Empresas</title>
<a href="PagFuncCliEmpresas.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 
            Escolha o metodo de busca:

            <form method="post" action="PesquisaCliEmpresaNome.php">
                NOME:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaCliEmpresaCnpj.php">
                CNPJ:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaCliEmpresaID.php">
                ID:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
        </center>
<?php
    include ('rodape.php');
?>