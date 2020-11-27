<?php
include "conexao.php";
session_start();
echo "Usuario: " . $_SESSION['usuarioNome'];
if (!isset($_SESSION['usuarioId'])) {
    header("Location: PagLogin.php");
}
?>