<?php
    include ('cabecalho.php')
?>
<form method="post" action="GuardarClientes.php">
    <table width="200" border="0">
        <tr>
            <td align="right">Nome:</td>
            <td><input type="text" name="nome" size="35" /></td>
        </tr>

        <tr>
            <td align="right">CPF:</td>
            <td><input type="text" name="cpf" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" name="telefone" size="10" /></td>
        </tr>

        <tr>
            <td align="right">E-mail:</td>
            <td><input type="text" name="email" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Rua:</td>
            <td><input type="text" name="rua" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Numero</td>
            <td><input type="text" name="numero" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Bairro:</td>
            <td><input type="text" name="bairro" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Estado:</td>
            <td><input type="text" name="estado" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Complemento:</td>
            <td><input type="text" name="complemento" size="10" /></td>
        </tr>

        <tr>
            <td align="right">CEP:</td>
            <td><input type="text" name="cep" size="10" /></td>
        </tr>

        <tr>
            <td align="right">Cidade:</td>
            <td><input type="text" name="cidade" size="10" /></td>
        </tr>

        <tr>
            <td align="right"></td>
            <td><input type="submit" value="Cadastrar" /></td>
        </tr>
    </table>
</form>
<?php
    include ('rodape.php')
?>
