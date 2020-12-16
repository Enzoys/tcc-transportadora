<?php
    include "confere_2.php";
    include "cabecalho.php";
?>
<title>Funcionário Página Cliente Empresa</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
    <div style="text-align: center">
        <h2>Gerenciar Clientes - Empresas</h2>
        <br/><a href="PagClienteCadastroEmpresa.php">CADASTRAR EMPRESA</a><br>
        <br><a href="http://localhost/tcc1/form_pesquisa_empresas.php">PESQUISAR EMPRESA</a><br>
    </div>
</div>
<div style="background-color: #ea8a82; width:30%; height: 100%; text-align: center;">
        TRANSPORTES<br />
        <a href="PagFuncPedidos.php">Pedidos</a><br />
        <a href="PagFuncCriarViagem.php">Novo transporte</a><br />
        <a href="PagFuncCadastroMotorista.php">Cadastrar Motorista</a><br />
        <br />CLIENTES<br />
        <a href="PagFuncCliPessoas.php">Pessoas Físicas</a><br />
        <a href="PagFuncCliEmpresas.php">Empresas</a><br />
    <br />
    <a href="sairSessao.php">Sair</a><br />
<?php
if ($_SESSION['usuarioNivelAcesso'] == "3") {
    echo "<br /><a href='PagAdm.php'>VOLTAR</a>";
} else {
    echo "<br /><a href='PagFunc.php'>VOLTAR</a>";
}
?>
</div>
<?php
    include ('rodape.php');
?>