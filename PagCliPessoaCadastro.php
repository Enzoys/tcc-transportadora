<?php
    include "Confere_2.php";
?>
<?php
    include ('cabecalho2.php');
?>
<title>Cadastrar Pessoa</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
    <br />
    <br />
    <br />
<h2 style="color:white; padding-left:40%;">Cadastrar Empresa</h2>
<form method="post" action="GuardaCliPessoa_1.php">
    <table class="table table-hover table-dark" border="1">
        <tr>
            <td align="right">Usuário:</td>
            <td><input type="text" name="usuario" size="30" /></td>
        </tr>
        <tr>
            <td align="right">Senha:</td>
            <td><input type="password" name="senha" size="40" /></td>
        </tr>
        <tr>
            <td align="right">Confirme sua senha:</td>
            <td><input type="password" name="senha1" size="40" /></td>
        </tr>
        <tr>
            <td align="right">Nome:</td>
            <td><input type="text" name="nome" size="50" /></td>
        </tr>
        <tr>
            <td align="right">CPF:</td>
            <td><input type="text" id="cpf1" data-inputmask="'mask': '999.999.999-99'" name="cpf" size="14" /></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" id="tel2" data-inputmask="'mask': '(99) [9]9999-9999'" name="telefone" size="15" /></td>
        </tr>
        <tr>
            <td align="right">Email:</td>
            <td><input type="text" name="email" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Estado:</td>
            <td>
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
            <td><input type="text" name="cidade" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Bairro:</td>
            <td><input type="text" name="bairro" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Endereço:</td>
            <td><input type="text" name="endereco" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Número:</td>
            <td><input type="text" id="num1" data-inputmask="'mask': '9[99999]'" name="numero" size="6" /></td>
        </tr>
        <tr>
            <td align="right">complemento:</td>
            <td><input type="text" name="complemento" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-primary btn-lg" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#cpf1").inputmask("999.999.999-99", { removeMaskOnSubmit: false });
        $("#tel1").inputmask("(99) [9]9999-9999", { removeMaskOnSubmit: false });
        $("#num1").inputmask("9[99999]", { removeMaskOnSubmit: false });
    });
</script>
