<?php
include "Confere_2.php";
include "conexao.php";
$cliente = $_POST['cliente'];
$motorista = $_POST['motorista'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$estado2 = $_POST['estado2'];
$cidade2 = $_POST['cidade2'];
$bairro2 = $_POST['bairro2'];
$endereco2 = $_POST['endereco2'];
$numero2 = $_POST['numero2'];
$complemento2 = $_POST['complemento2'];
if ($cliente == "" || $motorista == "" || $descricao == "" || $data == "" || $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" ||
    $complemento == "" || $estado2 == "" || $cidade2 == "" || $bairro2 == "" || $endereco2 == "" || $numero2 == "" || $complemento2 == "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} else {
    $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento',(SELECT id_login from usuarios WHERE id_login='$cliente'));";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
    $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2',(SELECT id_login from usuarios WHERE id_login='$cliente'));";
    $mysqli->query($sql2);
    $idCriado2 = $mysqli->insert_id;
    $sql3 = "INSERT INTO viagens (id_cliente, descricao_viagem, id_enderecoOrigem, id_enderecoDestino, status_viagem, motorista, data_chegada) "
            . "values('$cliente','$descricao','$idCriado','$idCriado2','Previsto','$motorista','$data');";
    $mysqli->query($sql3);
    $idCriado3 = $mysqli->insert_id;
    $sql = "SELECT * FROM viagens WHERE id_viagem = '$idCriado3'";    
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Transporte registrado com sucesso!');window.location.href='javascript:window.history.go(-2)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o transporte.');window.location.href='javascript:window.history.go(-1)'</script>";
    }
}