<?php
    include "banco/confere_2.php";
?> 
<?php
    include ('index/cabecalho.php')
?>
<title>Pesquisar Clientes</title>           
        <a href="http://localhost/tcc1/funcionario/pagCliente.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 
            Escolha o metodo de busca:

            <form method="post" action="funcionario/PesquisaClientenome.php">
                NOME:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="funcionario/PesquisaClientecpf.php">
                CPF:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="funcionario/PesquisaClienteemail.php">
                ID:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <button onclick="window.open('funcionario/ListarClientes.php')">LISTAR TODOS</button>
        </center>
<?php
    include ('index/rodape.php');
?>