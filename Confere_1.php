<?php
include "conexao.php";
session_start();
echo "Usuário: " . $_SESSION['usuarioNome'];
if (!isset($_SESSION['usuarioId'])) {
    header("Location: PagLogin.php");
}
?>