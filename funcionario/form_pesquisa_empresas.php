<?php
    include "banco/confere_2.php";
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Pesquisar Empresas</title>
    <a href="http://localhost/tcc1/funcionario/pagEmpresa.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 
            Escolha o metodo de busca:

            <form method="post" action="funcionario/PesquisaEmpresanome.php">
                NOME:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="funcionario/PesquisaEmpresacnpj.php">
                CNPJ:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="funcionario/PesquisaEmpresaemail.php">
                EMAIL:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
        </center>
<?php
    include ('index/rodape.php');
?>