<?php
    include "Confere_2.php";
    include "cabecalho2.php";
?>
<title>Cadastrar Motorista</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
<h2 style="color:white; padding-left:40%;">Cadastrar Motorista</h2>
<form method="POST" action="GuardaMotorista.php">
    <table class="table table-hover table-dark" border="1">
        <tr>
            <td align="right">Nome:</td>
            <td><input type="text" name="nome" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Telefone:</td>
            <td><input type="text" id="tel4" data-inputmask="'mask': '(99) [9]9999-9999'" name="telefone" size="15" /></td>
        </tr>        
        <tr>
            <td align="right">CPF:</td>
            <td><input type="text" id="cpf3" data-inputmask="'mask': '999.999.999-99'" name="cpf" size="14" /></td>
        </tr>
        <tr>
            <td align="right">Email(opcional):</td>
            <td><input type="text" name="email" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Carteira de Trabalho:</td>
            <td><input type="text" id="ctps2" data-inputmask="'mask': '*******[*********]'" name="ctps" size="16" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-primary btn-lg" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
</div>
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