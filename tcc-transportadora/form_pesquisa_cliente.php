<?php
    include "confere_2.php";
?> 
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Clientes</title>           
        <a href="http://localhost/tcc1/pagCliente.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 
            Escolha o metodo de busca:

            <form method="post" action="PesquisaClientenome.php">
                NOME:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaClientecpf.php">
                CPF:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaClienteemail.php">
                ID:
                <input type="text" size="40" name="txtcliente">
                <input type="submit" name="Enviar"> 
            </form>
            <button onclick="window.open('listarClientes.php')">LISTAR TODOS</button>
        </center>
<?php
    include ('rodape.php');
?>