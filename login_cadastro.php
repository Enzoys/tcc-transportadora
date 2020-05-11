<?php
    include ('cabecalho.php')
?>
<style>
    .forms {
        background-color: pink;
        width: 50%;
        border: solid red;
    }
    .acc-opcoes{
        display:block;
    }
</style>

<div id="opcoes" style="width: 80%; background-color: lightblue; margin: 0 auto;">
    <form method="post" action="logar_usuario.php">
        <table class="forms" style="float:right;">
            <th align="right">Login</th>            
            <tr>
                <td align="right">E-mail:</td>
                <td><input type="text" name="nome" size="35" /></td>
            </tr>

            <tr>
                <td align="right">Senha:</td>
                <td><input type="text" name="cpf" size="5" /></td>
            </tr>
        </table>
    </form>
    <form method="post" action="cadastrar_usuario.php">
        <table class="forms">
            <th align="right">Cadastro</th>
            <tr>
                <td align="right">Tipo de cliente:</td>
            </tr>
            <tr>
                <td align="right">Pessoa física:<input type="radio" name="cli_pessoa" value="Pessoa Física" alt="Pessoa Física" size="35" /></td>
                <td align="center">Empresa:<input type="radio" name="cli_empresa" value="Empresa" alt="Empresa" size="35" /></td>
            </tr>
            <tr>
                <td align="right">E-mail:</td>
                <td><input type="text" name="nome" size="35" /></td>
            </tr>
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="cpf" size="35" /></td>
            </tr>
            <tr>
                <td align="right">Senha:</td>
                <td><input type="text" name="cpf" size="20" /></td>
            </tr>
        </table>
    </form>

    <form method="post" action="cadastrar_usuario.php">
        <table class="forms">
            <th align="right">Cadastro</th>
            <tr>
                <td align="right">Tipo de cliente:</td>
            </tr>
            <tr>
                <td align="right">Pessoa física:<input type="radio" name="cli_pessoa" value="Pessoa Física" alt="Pessoa Física" size="35" /></td>
                <td align="center">Empresa:<input type="radio" name="cli_empresa" value="Empresa" alt="Empresa" size="35" /></td>
            </tr>
            <tr>
                <td align="right">E-mail:</td>
                <td><input type="text" name="nome" size="35" /></td>
            </tr>
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="cpf" size="35" /></td>
            </tr>
            <tr>
                <td align="right">Senha:</td>
                <td><input type="text" name="cpf" size="20" /></td>
            </tr>
        </table>
    </form>
</div>
<script>
    /*function myAccFunc(id) {
    var x = document.getElementById(id);
        if (x.className.indexOf("acc-mostrar") == -1) {
            Demo1.className = Demo1.className.replace(" acc-mostrar", "");
            Demo2.className = Demo2.className.replace(" acc-mostrar", "");
            Demo3.className = Demo3.className.replace(" acc-mostrar", "");
            x.className += " acc-mostrar";
            location.href="#"+id;
        } else { 
          x.className = x.className.replace(" acc-mostrar", "");
          location.href = "#botoes";
        }
    }*/
</script>
<?php
    include ('rodape.php')
?>
