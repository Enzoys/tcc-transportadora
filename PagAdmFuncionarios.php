<?php
    include "Confere_3.php";
    include "cabecalho2.php";
?>
<title>Adm Página Funcionário</title>
<title>Funcionário Página Cliente Pessoa Física</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
    <div style="text-align: center;padding:20%;">
        <h2 style="color:white;">Gerenciar Funcionários</h2> 

        <br/><a class="btn btn-primary btn-lg" href="PagAdmCadastroFuncionario.php">CADASTRAR FUNCIONÁRIO</a><br />
        <br><a class="btn btn-secondary btn-lg" href="PagAdmPesquisaFuncionario.php">PESQUISAR FUNCIONÁRIO</a><br />
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
