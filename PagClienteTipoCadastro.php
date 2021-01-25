<?php
    include "cabecalho2.php"
?>
<title>Tipo de Cadastro para Cliente</title>


    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Invicta-X <br>Transportes</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicio</a> 
    <a href="PagLogin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Voltar</a> 

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