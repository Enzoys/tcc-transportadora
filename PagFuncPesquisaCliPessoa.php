<?php
    include "confere_2.php";
?> 
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Clientes</title>           
        <a href="PagFuncCliPessoas.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 
            Escolha o metodo de busca:

            <form method="post" action="PesquisaCliPessoaNome.php">
                NOME:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaCliPessoaCpf.php">
                CPF:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaCliPessoaID.php">
                ID:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <button onclick="window.open('PagFuncListarCliPessoas.php')">LISTAR TODOS</button>
        </center>
<?php
    include ('rodape.php');
?>