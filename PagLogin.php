<?php
session_start();// INICIA SESSAO
?>
<?php
    include ('cabecalho2.php')
?>
<title>Login</title>


    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Invicta-X <br>Transportes</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicio</a> 
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Voltar</a> 

    <!--
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    -->
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Invicta-X Transportes</span>
</header>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

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