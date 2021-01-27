<!DOCTYPE html>
<html class="no-js" lang="pt-br">
    <!--prefix="og: https://ogp.me/ns#" pesquisar prefix e og-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="estilo2.css">

        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="description" content="        
    Transportadora confiável para todo território nacional, solicite agora um carregamento!" />
        <meta name="keywords" content="transporte, carga, logistica, caminhao, rj, rio de janeiro, brasil, brazil" />
        <!--<meta name="generator" content="Webnode 2">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta name="robots" content="noindex,nofollow">
        <meta property="og:url" content="https://demo-template-07-contract-02-real-estate-pt-br.webnode.com/">
        <meta property="og:title" content="demo-template-07-contract-02-real-estate-pt-br">
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="demo-template-07-contract-02-real-estate-pt-br">-->
        <!-- pesquisar meta tags e indexação-->

        <!--<link rel="canonical" href="https://demo-template-07-contract-02-real-estate-pt-br.webnode.com/">-->
        <link rel="icon" href="imagens\icon_invicta.png" />
        <link rel="shortcut icon" href="imagens\icon_invicta.png" />
        <link rel="apple-touch-icon" href="imagens\icon_invicta.png" />
<!--
        <link type="text/css" rel="stylesheet" href="estilo.css" />
-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    </head>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64" style="text-align:center;padding-top:10px;"><b>Invicta-X <br>Transportes</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><h4 style="text-align:center;padding-top:0px;">Inicio</h4></a> 
    <a href="#invictax" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><h5 style="text-align:center;padding-top:10px;">Invicta-X</h5></a> 
    <a href="#historia" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><h5 style="text-align:center;padding-top:10px;">Historia</h5></a> 
    <a href="#veiculos" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><h5 style="text-align:center;padding-top:10px;">Veiculos</h5></a> 
    <!--
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    -->
    <a href="#contato" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><h5 style="text-align:center;padding-top:10px;">Contato</h5></a><br /><br /><br />
    <?php
    if(isset($_SESSION['usuarioNivelAcesso'])){
if ($_SESSION['usuarioNivelAcesso'] == "2" || $_SESSION['usuarioNivelAcesso'] == "3") {
    echo "      <h4 style='padding-top:10px; text-align:center; class='w3-bar-item w3-button w3-hover-white'>TRANSPORTES</h4>
                <a href='PagFuncPedidos.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Pedidos</h5></a>
                <a href='PagFuncCriarViagem.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Novo transporte</h5></a>
                <a href='PagFuncCadastroMotorista.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Cadastrar Motorista</h5></a>
                <h4 style='padding-bottom:0px; text-align:center;'>CLIENTES</h4>
                <a href='PagFuncCliPessoas.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Pessoas Físicas</h5></a>
                <a href='PagFuncCliEmpresas.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Empresas</h5></a><br>";

            if ($_SESSION['usuarioNivelAcesso'] == "3") {
                echo "<a href='PagAdm.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Pagina ADM</h5></a>";
                echo "<a href='pagcriarADM.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Criar ADM</h5></a>";
                echo "<a href='PagAdmFuncionarios.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Funcionários</h5></a>";
                echo "<a href='sairSessao.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Sair</h5></a><br>";
            } else {
                echo "<a href='PagFunc.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Pedidos</h5></a>";
                echo "<a href='sairSessao.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Sair</h5></a><br>";
            }
}elseif ($_SESSION['usuarioNivelAcesso'] == "1"){
    echo "<h4 style='padding-top:0px; text-align:center; background-color:white; color:red;'>CLIENTE</h4>";
    echo "<a href='PagClienteAlterarDados.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Alterar dados</h5></a>";
    echo "<a href='PagClienteEnderecos.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Endereços</h5></a>";
    echo "<a href='PagClienteFazerPedido.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Fazer Pedido</h5></a>";   
    echo "<a href='sairSessao.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-white'><h5 style='text-align:center;'>Sair</h5></a>";
}}
?>
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
    <div class="w3-main" style=";margin-left:340px;margin-right:40px">