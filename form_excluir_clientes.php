<?php
    include ('cabecalho.php')
?>
<form method="post" action="apagarcliente.php">
    <table width="200" border="0">
        <tr>
            <td align="right">Codigo cliente:</td>
            <td><input type="text" name="id" size="5" /></td>
        </tr>
        <tr>
            <td align="right">&nbsp;</td>
            <td><input type="submit" value="Apagar" /></td>
        </tr>
    </table>
</form>
<?php
    include ('rodape.php')
?>
