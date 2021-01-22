<?php
include "Confere_1.php";
include "conexao.php";
$cliente = $_SESSION['usuarioId'];
$descricao = $_POST['descricao'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

if ($cliente == "" || $descricao == "" || $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" ||
    $complemento == "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . 
            "window.location.href='javascript:window.history.go(-1)'</script>";
    
    } else {
    $sqlid = "select max(id_endereco) as maxid from enderecoscad";   
    if ($result = $mysqli->query($sqlid)) {
            while ($row = $result->fetch_assoc()) {
                $maxid = $row['maxid'];
                $idendereco = $maxid+1;
                echo $idendereco;
                }
            }
    $sqlvalor = "SELECT * FROM enderecoscad WHERE descEnd = '$descricao'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor));
    if ($rowcount == 0){
    $sql1 = "INSERT INTO enderecoscad (estado, cidade, bairro, endereco, numero, complemento, id_usuario, descEnd,id_endereco) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento', '$cliente','$descricao','$idendereco');";
    $mysqli->query($sql1);
    echo $sql1;
    $sql = "SELECT * FROM enderecoscad WHERE id_endereco = '$idendereco'";
    echo $sql;    
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Endereço registrado com sucesso!');window.location.href='javascript:window.history.go(-1)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o endereço.');window.location.href='javascript:window.history.go(-1)'</script>";
    }}elseif($rowcount>=1){
        echo "<script language='javascript' type='text/javascript'>" . "alert('Use uma descrição diferente para poder identificá-las.');" . 
            "window.location.href='javascript:window.history.go(-1)'</script>";
    }
}