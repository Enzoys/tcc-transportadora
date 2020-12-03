<?php
session_start();
include "conexao.php";
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    //CONFERE SE OS CAMPOS FORAM ESCRITOS
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    //SELECIONA O USUARIO E SENHA NO BANCO
    $result_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    if (isset($resultado)) {
        //SE O LOGIN E SENHA CONSTAR NO BANCO
        $_SESSION['usuarioId'] = $resultado['id_login'];
        $_SESSION['usuarioNome'] = $resultado['usuario']; //
        $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso'];
        if ($_SESSION['usuarioNivelAcesso'] == "1") {
            header("Location: PagCliente.php");
        } elseif ($_SESSION['usuarioNivelAcesso'] == "2") {
            header("Location: PagFunc.php");
        } elseif ($_SESSION['usuarioNivelAcesso'] == "3") {
            header("Location: PagAdm.php");
        }
    } else {
        //SE NÃO CONSTAR NO BANCO
        $_SESSION['loginErro'] = '<script language="javascript">alert("Usuário ou senha inválidos.")</script>';
        header("Location: PagLogin.php");
    }
} else {
    //SE OS CAMPOS NAO FOREM PREENCHIDOS
    $_SESSION['loginErro'] = '<script language="javascript">alert("Os campos devem ser preenchidos.")</script>';
    header("window.location.href: PagLogin.php");
}
?> 