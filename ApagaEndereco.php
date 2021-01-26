<?php
include "confere_1.php";
include 'conexao.php';

$id = $_POST['id_endereco'];
$verifica = $_POST['verifica'];
$dado = $_POST['dado'];
$novodado = $_POST['novodado'];

if ($verifica == 'Excluir'){
    $sql2 = "DELETE FROM enderecoscad WHERE id_endereco ='$id'";
    $mysqli->query($sql2);
    
    $sqlvalor = "SELECT * FROM enderecoscad WHERE id_endereco = '$id'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O endereço não foi excluído!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O endereço foi excluído!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    }
    
}elseif($verifica=='Alterar'){
    
    $sql5="UPDATE enderecoscad SET $dado='$novodado' WHERE id_endereco='$id'";
    $mysqli->query($sql5);
    echo $sql5;
    
    $sqlvalor = "SELECT * FROM enderecoscad WHERE id_endereco = '$id'";
    echo $sqlvalor;
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount == 0) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O endereço não foi alterado!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O endereço foi alterado!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    }
    
}
?>