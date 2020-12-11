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
$sqlcpfcli = "SELECT * FROM clientesPessoas WHERE cpf = '$cpf'";
$rowcountcpfc = mysqli_num_rows($mysqli->query($sqlcpfcli));
$sqlctps = "SELECT * FROM funcionarios WHERE ctps = '$ctps'";
$rowcountctps = mysqli_num_rows($mysqli->query($sqlctps));
if ($usuario == "" || $senha == "" || $senha_conf == "" || $nome == "" || $cpf == "" || $telefone == "" || $email == "" || $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" || $complemento == "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
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
} elseif ($rowcountctps >= 1 && $rowcountctps != "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Já foi cadastrado um usuário com esta Carteira de Trabalho.\\nUtilize a opção para alterar ou excluir na página de Adm.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} else {
    $sql1 = "INSERT INTO usuarios (usuario,senha,nivel_acesso) VALUES('$usuario','$senha','2');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
    $sql2 = "INSERT INTO funcionarios (nome, cpf, telefone, email, ctps, id_funcionario) values('$nome','$cpf','$telefone','$email','$ctps','$idCriado');";
    $sql3 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','$idCriado')";
    $mysqli->query($sql2);
    $mysqli->query($sql3);
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Funcionário cadastrado com sucesso!');window.location.href='javascript:window.history.go(-2)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário.');window.location.href='javascript:window.history.go(-1)'</script>";
    }
}