<?php
session_start();
unset($_SESSION['usuarioId'], $_SESSION['usuarioNome'], $_SESSION['usuarioNivelAcesso']);
$_SESSION['logindeslogado'] = "<br/>Deslogado com sucesso.";
//redireciona o usuario para a página de login
header("Location: PagLogin.php");
?>
