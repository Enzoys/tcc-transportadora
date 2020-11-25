<?php
    include ('index/cabecalho.php')
?>
<title>Tipo de Cadastro para Cliente</title>
<button onclick="window.location.href = 'cliente/form_cadastro_LOGIN_emp.php'">EMPRESA(CNPJ)</button>
<button onclick="window.open('cliente/form_cadastro_LOGIN_cli.php')">PESSOA FISICA(CPF)</button>
</form>
<?php
    include ('index/rodape.php');
?>