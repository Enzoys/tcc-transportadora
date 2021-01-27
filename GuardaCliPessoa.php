<?php
include "conexao.php";
session_start();
if (isset($_SESSION['usuarioId'])){
echo "Usuário: " . $_SESSION['usuarioNome'];
}

require_once "recaptchalib.php";

$secret = "6Lex8ykaAAAAAHEZAkpmKknjQ93ORPiMLF-KOYS-";

$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

if ($response != null && $response->success) {
    
}
$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);
$senha_conf = MD5($_POST['senha1']);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'"; // VERIFICA SE O USUARIO COLOCADO JA EXISTE NO SISTEMA
$rowcount = mysqli_num_rows($mysqli->query($sql)); // SE HOUVER UM USUARIO IGUAL, RETORNA QUANTOS
$sqlcpffun = "SELECT * FROM funcionarios WHERE cpf = '$cpf'";
$rowcountcpff = mysqli_num_rows($mysqli->query($sqlcpffun));
$sqlcpfcli = "SELECT * FROM clientesPessoas WHERE cpf = '$cpf'"; // VERIFICA SE O CPF COLOCADO JA FOI CADASTRADO
$rowcountcpfc = mysqli_num_rows($mysqli->query($sqlcpfcli)); // SE JÁ HOUVER CPF, RETORNA QUANTOS
if ($usuario == "" || $senha == "" || $senha_conf == "" || $nome == "" || $cpf == "" || $telefone == "" || $email == "" || $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" || $complemento == "") {
    //GARANTE QUE NENHUM CAMPO ESTEJA VAZIO
    echo "<script language='javascript' type='text/javascript'>" . "alert('Todos os campos devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($senha != $senha_conf) {
    //SE AS NÃO CORRESPONDEREM
    echo "<script language='javascript' type='text/javascript'>
        alert('As senhas não coincidem.');window.location.
        href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcount >= 1) {
    //SE A BUSCA POR USUARIO RETORNAR UMA LINHA OU MAIS
    echo "<script language='javascript' type='text/javascript'>
        alert('Desculpe, este usuário já existe.');window.location.
        href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountcpff >= 1 || $rowcountcpfc >= 1) {
    //SE A BUSCA POR CPF RETORNAR UMA LINHA OU MAIS
    echo "<script language='javascript' type='text/javascript'>
        alert('Já foi cadastrado um usuário com este CPF.\\nUtilize a opção para alterar ou excluir na página do usuário ou entre em contato.');" .
        //excecao funcionario
        "window.location.href='javascript:window.history.go(-1)'</script>";
} else {
    //CADASTRA OS DADOS
    $sql1 = "INSERT INTO usuarios (usuario, senha, nivel_acesso) values('$usuario','$senha','1');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
    $sql2 = "INSERT INTO clientesPessoas (nome, cpf, telefone, email, id_clientePessoa) values('$nome','$cpf','$telefone','$email','$idCriado');";
    $sql3 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','$idCriado');";
    $mysqli->query($sql2);
    $mysqli->query($sql3);
    $rowcount = mysqli_num_rows($mysqli->query($sql)); //NOVA BUSCA POR USUARIO, PARA VERIFICAR SE O USUARIO FOI INSERIDO
    if ($rowcount == 1) {
        //SE AGORA, O BANCO RETORNAR 1 LINHA, O CADASTRO FOI EFETUADO
        if (isset($_SESSION['usuarioId'])){
            if ($_SESSION['usuarioNivelAcesso'] == "2" || $_SESSION['usuarioNivelAcesso'] == "3") {
                if ($_SESSION['usuarioNivelAcesso'] == "3") {
                    echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='PagAdm.php'</script>";
                } else {
                    echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='PagFuncCliPessoas.php'</script>";
                }
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='PagLogin.php'</script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
    }
}