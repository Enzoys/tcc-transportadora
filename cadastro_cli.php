<?php
include 'confere_2.php';
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$senha_conf = MD5($_POST['senha1']);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$sql = "SELECT * FROM usuarios WHERE login = '$login'";// VERIFICA SE O LOGIN COLOCADO JA EXISTE NO SISTEMA
$rowcount = mysqli_num_rows($mysqli->query($sql));// SE HOUVER UM LOGIN IGUAL, RETORNA QUANTOS

$sqlcpf = "SELECT * FROM clientes WHERE cpf = '$cpf'";// VERIFICA SE O CPF COLOCADO JA FOI CADASTRADO
$rowcountcpf = mysqli_num_rows($mysqli->query($sqlcpf));// SE JÁ HOUVER CPF, RETORNA QUANTOS

if( $login == ""  || $senha == "" || $senha_conf == "" || $nome == "" || $cpf == ""|| $telefone == ""|| 
    $email == ""|| $estado == ""|| $cidade == ""|| $bairro == ""|| $rua == ""|| $numero == ""|| $complemento == ""){    
    //GARANTE QUE NENHUM CAMPO ESTEJA VAZIO   
    echo"<script language='javascript' type='text/javascript'>".
    "alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS CORRETAMENTE! ATENTE-SE PARA QUE SUAS SENHAS COINCIDAM!');".
    "window.location.href='javascript:window.history.go(-1)'</script>";
    }else{
      if($rowcount >= 1){ //SE A BUSCA POR LOGIN RETORNAR UMA LINHA OU MAIS
        echo"<script language='javascript' type='text/javascript'>
    alert('Esse login já existe!');window.location.
    href='javascript:window.history.go(-1)'</script>";        
      }else{
      if($senha != $senha_conf){//SE AS NÃO CORRESPONDEREM
        echo"<script language='javascript' type='text/javascript'>
    alert('AS SENHAS NÃO COINCIDEM!');window.location.
    href='javascript:window.history.go(-1)'</script>";           
      }else{
      if ($rowcountcpf >= 1){ //SE A BUSCA POR CPF RETORNAR UMA LINHA OU MAIS
         echo"<script language='javascript' type='text/javascript'>"
          . "alert('Esse cpf já foi cadastrado!');"
          . "window.location.href='javascript:window.history.go(-1)'</script>";
      }else{ //CADASTRA OS DADOS
        $sql3 = "INSERT INTO usuarios (login,senha,niveis_acesso_id,atest) VALUES ('$login','$senha','1','$cpf'); ";
        $sql1 = "INSERT INTO clientes (nome, cpf, telefone, email) values('$nome', '$cpf', '$telefone','$email');";
        $sql2 ="INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento, id) values('$estado', "
                . "'$cidade', '$bairro','$rua','$numero', '$complemento', '$cpf')";
        echo $sql3;    
        echo $sql1;
        echo $sql2; 
        $mysqli->query($sql3);
        $mysqli->query($sql1);
        $mysqli->query($sql2);
        $rowcount = mysqli_num_rows($mysqli->query($sql)); //NOVA BUSCA POR LOGIN, PARA VERIFICAR SE O LOGIN FOI INSERIDO
        
        if($rowcount == 1){ //SE AGORA, O BANCO RETORNAR 1 LINHA, O CADASTRO FOI EFETUADO
        echo"<script language='javascript' type='text/javascript'>".
        "alert('Usuário cadastrado com sucesso!');".
        "window.location.href='form_login.php'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>"
        ."alert('Não foi possível cadastrar esse usuário');"
        ."window.location.href='javascript:window.history.go(-1)'</script>";
        }   
            }   
        }    
    }   
}
?>