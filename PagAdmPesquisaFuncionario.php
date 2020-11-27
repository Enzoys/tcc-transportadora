<?php
    include "confere_3.php";
    include "cabecalho.php";
?>
<title>Pesquisar Funcionário</title>
<a href="PagAdmFuncionarios.php">MENU ANTERIOR</a><br />
<br />
<center>
    <form method="post" action="PesquisaFuncionarioCpf.php">
        Pesquisa por CPF do funcionário:
        <input type="text" size="40" name="txtfuncionarioCpf" />
        <input type="submit" name="Enviar" />
    </form>
    <form method="post" action="PesquisaFuncionarioNome.php">
        Pesquisa por nome do funcionário:
        <input type="text" size="40" name="txtfuncionarioNome" />
        <input type="submit" name="Enviar" />
    </form>
</center>
<?php 
    include "rodape.php";
?>
