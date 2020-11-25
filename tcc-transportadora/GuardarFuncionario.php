<?php
    include "confere_3.php";
?>
<?php
include "conexao.php";
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$senha_conf = MD5($_POST['senha1']);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cnt = $_POST['cnt'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$sql = "SELECT * FROM usuarios WHERE login = '$login'";
$rowcount = mysqli_num_rows($mysqli->query($sql));
$sqlcpffun = "SELECT * FROM funcionarios WHERE cpf = '$cpf'";
$rowcountcpff = mysqli_num_rows($mysqli->query($sqlcpffun));
$sqlcpfcli = "SELECT * FROM clientes WHERE cpf = '$cpf'";
$rowcountcpfc = mysqli_num_rows($mysqli->query($sqlcpfcli));
$sqlcnt = "SELECT * FROM funcionarios WHERE cnt = '$cnt'";
$rowcountcnt = mysqli_num_rows($mysqli->query($sqlcnt));

if( $login == ""  || $senha == "" || $senha_conf == "" || $nome == "" || $cpf == ""|| $telefone == ""|| 
    $email == ""|| $estado == ""|| $cidade == ""|| $bairro == ""|| $rua == ""|| $numero == ""|| $complemento == ""){
    echo"<script language='javascript' type='text/javascript'>".
    "alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS CORRETAMENTE! ATENTE-SE PARA QUE SUAS SENHAS COINCIDAM!');".
    "window.location.href='javascript:window.history.go(-1)'</script>";

    }else{
      if($rowcount >= 1){
        echo"<script language='javascript' type='text/javascript'>
    alert('Esse login já existe!');window.location.
    href='javascript:window.history.go(-1)'</script>";
        
      }else{
      if($senha != $senha_conf){

        echo"<script language='javascript' type='text/javascript'>
    alert('AS SENHAS NÃO COINCIDEM!');window.location.
    href='javascript:window.history.go(-1)'</script>";
           
      }else{
      if ($rowcountcpff >= 1 || $rowcountcpfc >= 1){
         echo"<script language='javascript' type='text/javascript'>"
          . "alert('Esse cpf já foi cadastrado!');"
          . "window.location.href='javascript:window.history.go(-1)'</script>";
      }else{
          if ($rowcountcnt >= 1){
         echo"<script language='javascript' type='text/javascript'>"
          . "alert('Esse Carteira de Trabalho já foi cadastrada!');"
          . "window.location.href='javascript:window.history.go(-1)'</script>";
      }else{
        $sql3 = "INSERT INTO usuarios (login,senha,niveis_acesso_id,atest) VALUES ('$login','$senha','2','$cnt'); ";
        $sql1 = "INSERT INTO funcionarios (nome, cpf, telefone, email, cnt) values('$nome', '$cpf', '$telefone','$email', '$cnt');";
        $sql2 = "INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento, id) values('$estado', '$cidade', '$bairro','$rua','$numero', '$complemento', '$cnt')";
        echo $sql3;    
        echo $sql1;
        echo $sql2; 
        $mysqli->query($sql3);
        $mysqli->query($sql1);
        $mysqli->query($sql2);
        $rowcount = mysqli_num_rows($mysqli->query($sql));
        echo $rowcount;
        
        if($rowcount == 1){
        echo"<script language='javascript' type='text/javascript'>".
        "alert('Usuário cadastrado com sucesso!');".
        "window.location.href='javascript:window.history.go(-2)'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>"
        ."alert('Não foi possível cadastrar esse usuário');"
        ."window.location.href='javascript:window.history.go(-1)'</script>";
                    }              
                }
            } 
        }
    }
}