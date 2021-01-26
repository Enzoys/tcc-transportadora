<?php
    session_start();
    if (isset($_SESSION['usuarioId'])){
    echo "Usuário: " . $_SESSION['usuarioNome'];
    }
    include "cabecalho2.php";
    if (isset($_SESSION['usuarioNivelAcesso']) == "2" || isset($_SESSION['usuarioNivelAcesso']) == "3") {
        echo "<div style='background-color: #fffb99; width:100%; height: 100%; float:right'>";
    }
    
?>


    <!-- !PAGE CONTENT! -->
<div id="bgimg" style="padding:0%;" id="invictax">
<title style="text-color:white">Cadastro Cliente Empresa</title>
<body>
<div style="padding-left:25%;padding-right:25%;padding-top:5%;">
<h1 style="color:white; text-align:center;" class="badge-primary text-wrap" >Cadastro de Cliente Empresa</h1>
<form method="POST" action="GuardaCliEmpresa.php">
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
            <td align="right">Nome da empresa:</td>
            <td align="left"><input type="text" name="nome" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">CNPJ:</td>
            <td align="left"><input type="text" id="cnpj1" data-inputmask="'mask': '99.999.999/9999-99'" name="cnpj" size="18" /></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td align="left"><input type="text" id="tel2" data-inputmask="'mask': '(99) [9]9999-9999'" name="telefone" size="15" /></td>
        </tr>
        <tr>
            <td align="right">Email:</td>
            <td align="left"><input type="text" name="email" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Descrição:</td>
            <td align="left"><input type="text" name="descricao" size="50" maxlength="50"/></td>
        </tr>
        <tr>
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
            <td align="left"><input type="text" name="endereco" size="50"maxlength="50" /></td>
        </tr>
        <tr>
            <td align="right">Número:</td>
            <td align="left"><input type="text" id="num2" data-inputmask="'mask': '9[99999]'" name="numero" size="6" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Complemento:</td>
            <td align="left"><input type="text" name="complemento" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-right:25%"><input input class="btn btn-primary btn-lg" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $("#cnpj1").inputmask("99.999.999/9999-99", { removeMaskOnSubmit: false });
        $("#tel2").inputmask("(99) [9]9999-9999", { removeMaskOnSubmit: false });
        $("#num2").inputmask("9[99999]", { removeMaskOnSubmit: false });
    });
</script>

</div>
</body>