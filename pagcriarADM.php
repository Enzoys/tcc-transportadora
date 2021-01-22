<?php
    include "Confere_3.php";
    include "cabecalho.php";
?>
<title>Adm Página Criar ADM</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
    <div style="text-align: center">
        NOVO ADMINISTRADOR
        <form method="post" action="criaADM.php">
            <table width="200" border="2">
                <tr>
                <td align="right">Usuário:</td>
                <td><input type="text" name="usuario" size="5" /></td>
                </tr>
                <tr>
                <td align="right">Senha:</td>
                <td><input type="password" name="senha" size="5" /></td>
                </tr>
                <tr>
                <td align="right">Confirme a senha:</td>
                <td><input type="password" name="confsenha" size="5" /></td>
                </tr>
                <tr>
                <td align="center">&nbsp;</td>
                <td><input type="submit" value="CRIAR" /></td>
                </tr>
            </table>
        </form>
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
