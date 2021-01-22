<?php
include "conexao.php";
session_start();
if (!isset($_SESSION['usuarioId'])) {
    header("Location: PagLogin.php");
}
if ($_SESSION['usuarioNivelAcesso'] == "2" || $_SESSION['usuarioNivelAcesso'] == "3") {
    echo "Usuário: " . $_SESSION['usuarioNome'];
} else {
    header("Location: index.php");
}
?>