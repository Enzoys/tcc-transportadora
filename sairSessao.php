<?php
session_start();
unset($_SESSION['usuarioId'], $_SESSION['usuarioNome'], $_SESSION['usuarioNivelAcesso']);
$_SESSION['logindeslogado'] = "Deslogado com sucesso.";
//redireciona o usuario para a página de login
header("Location: PagLogin.php");
?>
