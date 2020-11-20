<?php
    include "conexao.php";
    session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];   
    if ( !isset($_SESSION['usuarioNome']) || !isset($_SESSION['usuarioId']) || !isset($_SESSION['usuarioNiveisAcessoId'])){
    header("Location: form_login.php");}
?>

