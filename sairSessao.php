<?php
session_start();
unset(  $_SESSION['usuarioId'], 
        $_SESSION['usuarioNome'], 
        $_SESSION['usuarioNiveisAcessoId'], 
        $_SESSION['usuarioEmail'], 
        $_SESSION['usuarioSenha']);
        $_SESSION['logindeslogado'] = "Deslogado com sucesso";
//redireciona o usuario para a página de login
header("Location: form_login.php");
?>