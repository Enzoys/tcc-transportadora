<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Empresas</title>
    <a href="http://localhost/tcc1/pagEmpresa.php">MENU ANTERIOR</a><br><br>
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
            <form method="post" action="PesquisaCliEmpresaEmail.php">
                EMAIL:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
        </center>
<?php
    include ('rodape.php');
?>