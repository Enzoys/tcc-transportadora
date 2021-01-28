<?php
include "Confere_2.php";
include 'conexao.php';
$id = $_POST['id'];
$tabcliempfun = $_POST['tabcliempfun'];
$idcliempfun = $_POST['idcliempfun'];
$sql2 = "SELECT * FROM $tabcliempfun WHERE $idcliempfun ='$id'";//
if ($result = $mysqli->query($sql2)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

        $sql1 = "delete from usuarios where id_login = '$id'";
        $mysqli->query($sql1);
        $sql3 = "delete from enderecos where id_usuario = '$id'";
        $mysqli->query($sql3);
        $sql = "delete from $tabcliempfun where $idcliempfun = '$id'";
        $mysqli->query($sql);
    }
}

$sqlvalor = "SELECT * FROM $tabcliempfun WHERE $idcliempfun = '$id'";
$rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O usuário não foi excluído!');window.location.
        href='javascript:window.history.go(-2)'</script>";
} else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O usuário foi excluído!');window.location.
        href='javascript:window.history.go(-3)'</script>";
}
?>