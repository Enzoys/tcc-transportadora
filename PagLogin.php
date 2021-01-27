<?php
session_start();// INICIA SESSAO
?>
<?php
    include ('cabecalho2.php')
?>
<title>Login</title>
<head><script src='https://www.google.com/recaptcha/api.js?hl=pt'> </script> </head>
    <!-- !PAGE CONTENT! -->

<div id="bgimg" style="padding-left:30%;padding-right:30%;padding-top:20%;padding-bottom:20%;" id="invictax">
<h1 style="color:white; text-align:center;" class="badge-primary text-wrap" >Cadastro de Cliente Pessoa Física</h1>
<div id="bgtxt">
<form method="POST" action="Login.php">
<table style="color:#4287f5; width:100%;" class="table">
  <thead class="thead-dark">
    <tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="color:white; text-align:center;" scope="row"><label>Login :</label><input type="text" name="usuario" id="usuario"><br></th>
    </tr>
    <tr>
      <th style="color:white; text-align:center;" scope="row"><label>Senha :</label><input type="password" name="senha" id="senha"><br></th>
    </tr>
    <tr>
        <td><div class="g-recaptcha" data-sitekey="6LcQ7ykaAAAAAPB4ZFJ4ygwie6GtAF4fbxHy8AMZ  "> </div>  </td>
    </tr>
    <tr>
      <th scope="row"><input class="btn btn-primary btn-lg" type="submit" value="Entrar" id="entrar" name="entrar"><br></th>

    </tr>
    <tr>
      <th scope="row"><a class="btn btn-secondary btn-lg" href="PagClienteTipoCadastro.php">Cadastre-se</a><br></th>
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