<?php
    include "banco/confere_3.php";
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Pesquisar Funcionário</title>
    <a href="http://localhost/tcc1/adm/pagFuncionario.php">MENU ANTERIOR</a><br><br>
        <center div="center"> 

            <form method="post" action="adm/PesquisaFuncionariocpf.php">
                Pesquisa por cpf do funcionário:
                <input type="text" size="40" name="txtfuncionario">
                <input type="submit" name="Enviar"> 
            </form>
            <form method="post" action="adm/PesquisaFuncionarionome.php">
                Pesquisa por nome do funcionário:
                <input type="text" size="40" name="txtfuncionario">
                <input type="submit" name="Enviar"> 
            </form>
        </center>
<?php
    include ('index/rodape.php');
?>