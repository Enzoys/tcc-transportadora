<?php
    include "cabecalho.php";
?>
<title>Cadastrar Motorista</title>
<form method="POST" action="GuardaMotorista.php">
    <table width="200" border="3px">
        <tr>
            <td align="right">Nome:</td>
            <td><input type="text" name="nome" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" name="telefone" size="14" /></td>
        </tr>        
        <tr>
            <td align="right">CPF (Opcional):</td>
            <td><input type="text" name="cpf" size="14" /></td>
        </tr>
        <tr>
            <td align="right">Email (Opcional):</td>
            <td><input type="text" name="email" size="50" /></td>
        </tr>
        <tr>
            <td align="right">Carteira de Trabalho (Opcional):</td>
            <td><input type="text" name="ctps" size="50" /></td>
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