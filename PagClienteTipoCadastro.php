<?php
    include "cabecalho.php"
?>
<title>Tipo de Cadastro para Cliente</title>

   <title>Login</title>
<div id="bgimg" style="padding:30%;" id="invictax">
<div id="bgtxt">
<div class="buttons">
<table style="color:#4287f5; width:100%;" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cadastro</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><label></label><button class="btn btn-primary btn-lg" onclick="window.location.href = 'PagClienteCadastroPessoa.php'">PESSOA FÍSICA(CPF)</button><br></th>
    </tr>
    <tr>
      <th scope="row"><label></label><button class="btn btn-secondary btn-lg" onclick="window.location.href = 'PagClienteCadastroEmpresa.php'">EMPRESA(CNPJ)</button><br></th>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>






<!-- Antigo formulario em caso de erro no novo
<form method="POST" action="Login.php">
    <label>Login:</label><input type="text" name="login" id="login"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
    <a href="PagClienteTipoCadastro.php">Cadastre-se</a>
</form>
-->

        <p>
            <?php // SE HOUVER ERRO, MOSTRA A VARIAVEL GLOBAL	
		if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
        </p>
        <p>
            <?php // QUANDO DESLOGAR, MOSTRA A VARIAVEL GLOBAL
                if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
        
<?php
    include ('rodape.php');
?>



<?php
    include "rodape.php";
?>