<?php
    include "Confere_3.php";
    include "cabecalho2.php";
?>
<title>Adm Página Criar ADM</title>
<div style=" background-color: #343a40; width:100%; height: 100%; float:right">
    <div style="padding-left:40%;padding-right:40%;padding-top:20%;padding-bottom:20%;" style="text-align: center">
    <h2 style="color:white; text-align:center;">Novo Administrador</h2>
        <form method="post" action="criaADM.php">
            <table class="table table-hover table-dark" border="1">
                <tr>
                <td style="color:white; text-align:center;">Usuário:</td>
                <td><input type="text" name="usuario" size="5" /></td>
                </tr>
                <tr>
                <td style="color:white; text-align:center;">Senha:</td>
                <td><input type="password" name="senha" size="5" /></td>
                </tr>
                <tr>
                <td style="color:white; text-align:center;">Confirme a senha:</td>
                <td><input type="password" name="confsenha" size="5" /></td>
                </tr>
                <tr>
                <td style="color:white; text-align:center;">&nbsp;</td>
                <td><input class="btn btn-primary btn-lg" type="submit" value="CRIAR" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
    include "rodape.php";
?>
