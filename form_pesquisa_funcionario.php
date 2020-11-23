<?php
    include "confere_3.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Funcionário</title>
    <a href="http://localhost/tcc1/pagFuncionario.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 

            <form method="post" action="PesquisaFuncionariocpf.php">
                Pesquisa por cpf do funcionário:
                <input type="text" size="40" name="txtfuncionario">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="PesquisaFuncionarionome.php">
                Pesquisa por nome do funcionário:
                <input type="text" size="40" name="txtfuncionario">
                <input type="submit" name="Enviar"> 
            </form>
        </center>
<?php
    include ('rodape.php');
?>