<?php
include "Confere_3.php";
include "conexao.php";
$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);
$senha_conf = MD5($_POST['confsenha']);

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$rowcount = mysqli_num_rows($mysqli->query($sql));

if ($usuario == "" || $senha == "" || $senha_conf == "") {
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($senha != $senha_conf) {
    echo "<script language='javascript' type='text/javascript'>
        alert('As senhas não coincidem.');window.location.
        href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcount >= 1) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Desculpe, este usuário já existe.');window.location.
        href='javascript:window.history.go(-1)'</script>";
} else {
    $sql1 = "INSERT INTO usuarios (usuario,senha,nivel_acesso) VALUES('$usuario','$senha','3');";
    $mysqli->query($sql1);
   // $idCriado = $mysqli->insert_id;
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Administrador incluso com sucesso!');window.location.href='javascript:window.history.go(-2)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível adicionar o Administrador.');window.location.href='javascript:window.history.go(-1)'</script>";
    }
}
?>

