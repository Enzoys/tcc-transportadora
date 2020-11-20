<?php
include "conexao.php";
include 'confere.php';
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$senha_conf = MD5($_POST['senha1']);
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$sql = "SELECT * FROM usuarios WHERE login = '$login'";
$rowcount = mysqli_num_rows($mysqli->query($sql));
$sqlcnpj = "SELECT * FROM empresas WHERE cnpj = '$cnpj'";
$rowcountcnpj = mysqli_num_rows($mysqli->query($sqlcnpj));

if( $login == ""  || $senha == "" || $senha_conf == "" || $nome == "" || $cnpj == ""|| $telefone == ""|| $descricao="" ||
    $email == ""|| $estado == ""|| $cidade == ""|| $bairro == ""|| $rua == ""|| $numero == ""|| $complemento == ""){
    echo"<script language='javascript' type='text/javascript'>
    alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS CORRETAMENTE! ATENTE-SE PARA QUE SUAS SENHAS COINCIDAM!');window.location.
    href='javascript:window.history.go(-1)'</script>";

} else{
      if( $rowcount >= 1 ){
       echo"<script language='javascript' type='text/javascript'>
    alert('Esse login já existe!');window.location.
    href='javascript:window.history.go(-1)'</script>";

      }if ($rowcountcnpj == 1){
         echo"<script language='javascript' type='text/javascript'>"
          . "alert('Esse cnpj já foi cadastrado!');"
          . "window.location.href='javascript:window.history.go(-1)'</script>";
      }else{
        $sql3 = "INSERT INTO usuarios (login,senha,niveis_acesso_id,atest) VALUES ('$login','$senha','1','$cnpj'); ";
        $sql1 = "INSERT INTO empresas (nome, cnpj, telefone, email, descricao) values('$nome', '$cnpj', '$telefone','$email','$descricao');";
        $sql2 ="INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento, id) values('$estado', '$cidade', '$bairro','$rua','$numero', '$complemento', '$cnpj')";
        echo $sql3;    
        echo $sql1;
        echo $sql2; 
        $mysqli->query($sql3);
        $mysqli->query($sql1);
        $mysqli->query($sql2);
        $rowcount = mysqli_num_rows($mysqli->query($sql));
        
        if($rowcount == 1){
        echo"<script language='javascript' type='text/javascript'>"
        ."alert('Usuário cadastrado com sucesso!');"
        ."window.location.href='form_login.php'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>"
        ."alert('Não foi possível cadastrar esse usuário');"
        ."window.location.href='javascript:window.history.go(-1)'</script>";
                }
            }        
}
?>

