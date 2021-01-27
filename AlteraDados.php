<?php
include "Confere_1.php";
include 'cabecalho2.php';
?>
<title>Página Alterar Dados</title>

<?php 
$id = $_POST['id'];
$tabcliempfun = $_POST['tabcliempfun'];
$idcliempfun = $_POST['idcliempfun'];
$dado = $_POST['dado'];
$novodado = $_POST['novodado'];

$sql3 = "SELECT * FROM $tabcliempfun WHERE $dado='$novodado'";
$rowcount = mysqli_num_rows($mysqli->query($sql3));
if($rowcount==0){
$sql2 = "SELECT * FROM $tabcliempfun WHERE $idcliempfun ='$id'";
if ($result = $mysqli->query($sql2)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

        $sql1 = "UPDATE $tabcliempfun SET $dado='$novodado' where $idcliempfun = '$id'";
        if($mysqli->query($sql1)){
            
            echo '<script> alert("Alterado com sucesso!");window.location.href="javascript:window.history.go(-2)";</script>';
        }
    }
}}else{
    echo '<script> alert("O dado cadastrado já existe!");window.location.href="javascript:window.history.go(-2)";</script>';
}


include 'rodape.php';
?>
