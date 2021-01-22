<?php
session_start();// INICIA SESSAO
?>
<?php
    include ('cabecalho.php')
?>
<title>Login</title>
<div id="bgimg" style="padding:30%;" id="invictax">
<div id="bgtxt">
<form method="POST" action="Login.php">
<table style="color:#4287f5; width:100%;" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><label>Login :</label><input type="text" name="usuario" id="usuario"><br></th>
    </tr>
    <tr>
      <th scope="row"><label>Senha :</label><input type="password" name="senha" id="senha"><br></th>
    </tr>
    <tr>
      <th scope="row"><input type="submit" value="Entrar" id="entrar" name="entrar"><br></th>

    </tr>
    <tr>
      <th scope="row"><a href="PagClienteTipoCadastro.php">Cadastre-se</a><br></th>
    </tr>
    <tr>
        <th scope="row" style="color: white">
          <?php // SE HOUVER ERRO, MOSTRA A VARIAVEL GLOBAL	
		if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
          <?php // QUANDO DESLOGAR, MOSTRA A VARIAVEL GLOBAL
                if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }            
            ?><br></th>
    </tr>
  </tbody>
</table>
</form>
</div>
</div>

<?php
    include ('rodape.php');
?>