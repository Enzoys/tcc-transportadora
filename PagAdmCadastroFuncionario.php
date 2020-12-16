<?php
    include "confere_3.php";
    include "cabecalho.php";
?>
<title>Cadastrar Funcionário</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
<h2>Cadastrar Funcionário</h2>
<form method="post" action="GuardaFuncionario.php">
    <table width="200" border="3">
        <tr>
            <td align="right">Usuário:</td>
            <td><input type="text" name="usuario" size="30" maxlength="30"/></td>
        </tr>

        <tr>
            <td align="right">Senha:</td>
            <td><input type="password" name="senha" size="40" maxlength="40"/></td>
        </tr>

        <tr>
            <td align="right">Confirme sua senha:</td>
            <td><input type="password" name="senha1" size="40" maxlength="40"/></td>
        </tr>

        <tr>
            <td align="right">Nome:</td>
            <td><input type="text" name="nome" size="50" maxlength="50"/></td>
        </tr>

        <tr>
            <td align="right">CPF:</td>
            <td><input type="text" id="cpf2" data-inputmask="'mask': '999.999.999-99'" name="cpf" size="14" /></td>
        </tr>

        <tr>
            <td align="right">Carteira de Trabalho (Opcional):</td>
            <td><input type="text" id="ctps1" data-inputmask="'mask': '*******[*********]'" name="ctps" size="16" /></td>
        </tr>

        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" id="tel3" data-inputmask="'mask': '(99) [9]9999-9999'" name="telefone" size="15" /></td>
        </tr>

        <tr>
            <td align="right">Email:</td>
            <td><input type="text" name="email" size="50" maxlength="50"/></td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="width:100%">Endereço</td>
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
            <td><input type="text" name="cidade" size="50" maxlength="50"/></td>
        </tr>

        <tr>
            <td align="right">Bairro:</td>
            <td><input type="text" name="bairro" size="50" maxlength="50"/></td>
        </tr>

        <tr>
            <td align="right">Endereço:</td>
            <td><input type="text" name="endereco" size="50" maxlength="50"/></td>
        </tr>

        <tr>
            <td align="right">Número:</td>
            <td><input type="text" id="num3" data-inputmask="'mask': '9[99999]'" name="numero" size="6" /></td>
        </tr>

        <tr>
            <td align="right">Complemento:</td>
            <td><input type="text" name="complemento" size="50" maxlength="50"/></td>
        </tr>

        <tr>
            <td align="right"></td>
            <td><input type="submit" value="Cadastrar" /></td>
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
        <br />ADMINISTRADOR<br />
        <a href="PagAdmFuncionarios.php">Funcionários</a><br>
    <br />
    <a href="sairSessao.php">Sair</a><br/>
    <br /><a href='PagAdm.php'>VOLTAR</a>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#cpf2").inputmask("999.999.999-99", { removeMaskOnSubmit: false });
        $("#ctps1").inputmask("*******[*********]", { removeMaskOnSubmit: false });
        $("#tel3").inputmask("(99) [9]9999-9999", { removeMaskOnSubmit: false });
        $("#num3").inputmask("9[99999]", { removeMaskOnSubmit: false });
    });
</script>
<?php
    include "rodape.php";
?>
