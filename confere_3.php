<?php
    include "conexao.php";
    session_start();      
    if (!isset($_SESSION['usuarioId'])){
    header("Location: form_login.php");}
    if ($_SESSION['usuarioNiveisAcessoId'] == "3"){
    echo "Usuario: ". $_SESSION['usuarioNome'];
    }else{
    header("Location: index.php");}
?>