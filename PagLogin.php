<?php
session_start();// INICIA SESSAO
?>
<?php
    include ('cabecalho.php')
?>
<title>Login</title>
<<<<<<< HEAD
<br>
=======
<div id="bgimg" style="padding:30%;" id="invictax">
<div id="bgtxt">
>>>>>>> d6d5cd10f02a735abe036c39f0e9d68d28d86620
<form method="POST" action="Login.php">
<table style="color:#4287f5; width:100%;" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><label>Login :</label><input type="text" name="login" id="login"><br></th>
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
  </tbody>
</table>
</form>
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