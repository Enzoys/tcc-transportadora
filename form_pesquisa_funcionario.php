<?php
    include "confere.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><a href="http://localhost/tcc1/pagFuncionario.php">MENU ANTERIOR</a><br><br>
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
    </body>
</html>