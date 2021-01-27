<?php
include "Confere_2.php";
include "conexao.php";
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$ctps = $_POST['ctps'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sqlcpfmot = "SELECT * FROM motoristas WHERE cpf = '$cpf'";
$rowcountcpfmot = mysqli_num_rows($mysqli->query($sqlcpfmot));

$sqlctps = "SELECT * FROM motoristas WHERE ctps = '$ctps'";
$rowcountctps = mysqli_num_rows($mysqli->query($sqlctps));
if ($nome == "" || $telefone == "" || $cpf ==""|| $ctps=="") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountcpfmot >= 1 && $rowcountctps != "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Já foi cadastrado um motorista com este CPF.\\nUtilize a opção para alterar ou excluir na página de funcionário.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountctps >= 1 && $rowcountctps != "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Já foi cadastrado um motorista com esta Carteira de Trabalho.\\nUtilize a opção para alterar ou excluir na página de funcionário.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} else {
    $sql1 = "INSERT INTO motoristas (nome, cpf, telefone, email, ctps) values('$nome','$cpf','$telefone','$email','$ctps');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
    $sql = "SELECT * FROM motoristas WHERE id_motorista = '$idCriado'";
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Motorista cadastrado com sucesso!');window.location.href='javascript:window.history.go(-2)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o motorista.');window.location.href='javascript:window.history.go(-1)'</script>";
    }
}