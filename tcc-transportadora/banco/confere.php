<?php
    include "banco/conexao.php";
    session_start();
    echo "Usuario: ". $_SESSION['usuarioNome'];   
    if (!isset($_SESSION['usuarioId'])){
    header("Location: cliente/form_login.php");}
?>