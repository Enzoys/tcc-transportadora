<?php
include "Confere_3.php";
include "conexao.php";
$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);
$senha_conf = MD5($_POST['senha1']);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$ctps = $_POST['ctps'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$rowcount = mysqli_num_rows($mysqli->query($sql));
$sqlcpffun = "SELECT * FROM funcionarios WHERE cpf = '$cpf'";
$rowcountcpff = mysqli_num_rows($mysqli->query($sqlcpffun));
$sqlcpfcli = "SELECT * FROM clientes WHERE cpf = '$cpf'";
$rowcountcpfc = mysqli_num_rows($mysqli->query($sqlcpfcli));
$sqlctps = "SELECT * FROM funcionarios WHERE ctps = '$ctps'";
$rowcountctps = mysqli_num_rows($mysqli->query($sqlctps));
if ($usuario == "" || $senha == "" || $senha_conf == "" || $nome == "" || $cpf == "" || $telefone == "" || $email == "" || $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" || $complemento == "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Todos os campos devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($senha != $senha_conf) {
    echo "<script language='javascript' type='text/javascript'>
            alert('As senhas não coincidem.');window.location.
            href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcount >= 1) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Desculpe, este usuário já existe.');window.location.
        href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountcpff >= 1 || $rowcountcpfc >= 1) {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Já foi cadastrado um usuário com este CPF.\\nUtilize a opção para alterar ou excluir na página de Adm.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountctps >= 1) {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Já foi cadastrado um usuário com esta Carteira de Trabalho.\\nUtilize a opção para alterar ou excluir na página de Adm.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} else {
    $sql2 = "DECLARE @idFunc int";
    $sql1 = "INSERT INTO usuarios (usuario,senha,nivel_acesso) VALUES ('$usuario','$senha','2'); ";
    $sql3 = "SET @idFunc = SCOPE_IDENTITY()";
    $sql4 = "INSERT INTO funcionarios (nome, cpf, telefone, email, ctps, id_funcionario) values('$nome','$cpf','$telefone','$email','$ctps', @idFunc);";
    $sql5 = "INSERT INTO endereco (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado', '$cidade', '$bairro','$endereco','$numero', '$complemento', @idFunc)";
    echo $sql1;
    echo $sql2;
    echo $sql3;
    echo $sql4;
    echo $sql5;
    $mysqli->query($sql1);
    $mysqli->query($sql2);
    $mysqli->query($sql3);
    $mysqli->query($sql4);
    $mysqli->query($sql5);
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    echo $rowcount;
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>" . "alert('Funcionário cadastrado com sucesso!');" . "window.location.href='javascript:window.history.go(-2)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>" . "alert('Não foi possível cadastrar o usuário.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
    }
}