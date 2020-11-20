<?php
session_start();
include "conexao.php";
if((isset($_POST['login'])) && (isset($_POST['senha']))){ //CONFERE SE OS CAMPOS FORAM ESCRITOS
$login = $_POST['login'];
$senha = md5($_POST['senha']);

//SELECIONA O USUARIO E SENHA NO BANCO
$result_usuario = "SELECT * FROM usuarios WHERE login = '$login' && senha = '$senha' LIMIT 1";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if(isset($resultado)){//SE O LOGIN E SENHA CONSTAR NO BANCO
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['login'];
    $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];   
    if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: cliemp.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: func.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
                header("Location: adm.php");
            }
            }else{
            $_SESSION['loginErro'] = "Usuário ou senha Inválido"; // SE NÃO CONSTAR NO BANCO
            header("Location: form_login.php");}

            }else{// SE OS CAMPOS NAO FOREM PREENCHIDOS
    $_SESSION['loginErro'] = "Você deve preencher os campos";  
    header("window.location.href: 'form_login.php'");
}
    
?> 