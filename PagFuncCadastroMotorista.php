<?php
    include "Confere_2.php";
    include "cabecalho.php";
?>
<title>Cadastrar Motorista</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
<h2>Cadastrar Motorista</h2>
<form method="POST" action="GuardaMotorista.php">
    <table width="200" border="3px">
        <tr>
            <td align="right">Nome:</td>
            <td><input type="text" name="nome" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" id="tel4" data-inputmask="'mask': '(99) [9]9999-9999'" name="telefone" size="15" /></td>
        </tr>        
        <tr>
            <td align="right">CPF (Opcional):</td>
            <td><input type="text" id="cpf3" data-inputmask="'mask': '999.999.999-99'" name="cpf" size="14" /></td>
        </tr>
        <tr>
            <td align="right">Email (Opcional):</td>
            <td><input type="text" name="email" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Carteira de Trabalho (Opcional):</td>
            <td><input type="text" id="ctps2" data-inputmask="'mask': '*******[*********]'" name="ctps" size="16" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
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
<script type="text/javascript">
    $(document).ready(function () {
        $("#cpf3").inputmask("999.999.999-99", { removeMaskOnSubmit: false });
        $("#ctps2").inputmask("*******[*********]", { removeMaskOnSubmit: false });
        $("#tel4").inputmask("(99) [9]9999-9999", { removeMaskOnSubmit: false });
    });
</script>
<?php
    include "rodape.php";
?>