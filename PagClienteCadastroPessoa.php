<?php
    session_start();
    if (isset($_SESSION['usuarioId'])){
    echo "Usuário: " . $_SESSION['usuarioNome'];
    }
    include "cabecalho.php";
    if (isset($_SESSION['usuarioNivelAcesso']) == "2" || isset($_SESSION['usuarioNivelAcesso']) == "3") {
        echo "<div style='background-color: #fffb99; width:70%; height: 100%; float:right'>";
    }
?>
<div id="bgimg" style="padding:0%;" id="invictax">
<title style="text-color:white">Cadastro Cliente Pessoa Física</title>
<body >
<div style="padding:20%;;">
<h1 style="color:white; text-align:center;" class="badge-primary text-wrap" >Cadastro de Cliente Pessoa Física</h1>
<form method="POST" action="GuardaCliPessoa.php">
    <table id="bgtxt" class="table table-striped table-dark">
        <tr>
            <td align="right">Usuário:</td>
            <td align="left"><input type="text" name="usuario" size="30" maxlength="30"/></td>
        </tr>
        <tr>
            <td align="right">Senha:</td>
            <td align="left"><input type="password" name="senha" size="40" maxlength="40"/></td>
        </tr>
        <tr>
            <td align="right">Confirme sua senha:</td>
            <td align="left"><input type="password" name="senha1" size="40" maxlength="40"/></td>
        </tr>
        <tr>
            <td align="right">Nome:</td>
            <td align="left"><input type="text" name="nome" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">CPF:</td>
            <td align="left"><input type="text" id="cpf1" data-inputmask="'mask': '999.999.999-99'" name="cpf" size="14" /></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td align="left"><input type="text" id="tel1" data-inputmask="'mask': '(99) [9]9999-9999'" name="telefone" size="15" /></td>
        </tr>
        <tr>
            <td align="right">Email:</td>
            <td align="left"><input type="text" name="email" size="50" maxlength="50"/></td>
        </tr>       
        <tr>
            <td align="right">Estado:</td>
            <td align="left">
                <select name="estado">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">Cidade:</td>
            <td align="left"><input type="text" name="cidade" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Bairro:</td>
            <td align="left"><input type="text" name="bairro" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Endereço:</td>
            <td align="left"><input type="text" name="endereco" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Número:</td>
            <td align="left"><input type="text" id="num1" data-inputmask="'mask': '9[99999]'" name="numero" size="6" /></td>
        </tr>
        <tr>
            <td align="right">Complemento:</td>
            <td align="left"><input type="text" name="complemento" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right:25%"><input class="btn btn-primary btn-lg" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $("#cpf1").inputmask("999.999.999-99", { removeMaskOnSubmit: false });
        $("#tel1").inputmask("(99) [9]9999-9999", { removeMaskOnSubmit: false });
        $("#num1").inputmask("9[99999]", { removeMaskOnSubmit: false });
    });
</script>
<?php
if (isset($_SESSION['usuarioNivelAcesso']) == "2" || isset($_SESSION['usuarioNivelAcesso']) == "3") {
    echo "
        </div>
        <div style='background-color: #ea8a82; width:30%; height: 100%; text-align: center;'>
                TRANSPORTES<br />
                <a href='PagFuncPedidos.php'>Pedidos</a><br />
                <a href='PagFuncCriarViagem.php'>Novo transporte</a><br />
                <a href='PagFuncCadastroMotorista.php'>Cadastrar Motorista</a><br />
                <br />CLIENTES<br />
                <a href='PagFuncCliPessoas.php'>Pessoas Físicas</a><br />
                <a href='PagFuncCliEmpresas.php'>Empresas</a><br />
            <br />
            <a href='sairSessao.php'>Sair</a><br />";

            if ($_SESSION['usuarioNivelAcesso'] == "3") {
                echo "<br /><a href='PagAdm.php'>VOLTAR</a>";
            } else {
                echo "<br /><a href='PagFunc.php'>VOLTAR</a>";
            }
    echo "</div>";
}
    include "rodape.php";
?>
</div>
</body>