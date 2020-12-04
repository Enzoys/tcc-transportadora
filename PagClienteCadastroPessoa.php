<?php
    include "cabecalho.php";
?>
<title>Cadastro Cliente Pessoa Física</title>
<form method="POST" action="GuardaCliPessoa.php">
    <table width="200" border="3px">
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
            <td><input type="text" name="cpf" size="14" /></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" name="telefone" size="14" /></td>
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
            <td><input type="text" name="numero" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Complemento:</td>
            <td><input type="text" name="complemento" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
<?php
    include "rodape.php";
?>