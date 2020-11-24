<?php
    include "conexao.php";
    session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];   
    if (!isset($_SESSION['usuarioId'])){
    header("Location: form_login.php");}
?>