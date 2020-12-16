<?php
    include "Confere_3.php";
    include "cabecalho.php";
?>
<title>Adm Página Funcionário</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
    <div style="text-align: center">
        <h2>Gerenciar Funcionários</h2>
        <br/><a href="PagAdmCadastroFuncionario.php">CADASTRAR FUNCIONÁRIO</a><br />
        <br><a>PESQUISAR FUNCIONÁRIO</a><br />
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
        <br />ADMINISTRADOR<br />
        <a href="PagAdmFuncionarios.php">Funcionários</a><br>
    <br />
    <a href="sairSessao.php">Sair</a><br/>
    <br /><a href='PagAdm.php'>VOLTAR</a>
</div>
<?php
    include "rodape.php";
?>
