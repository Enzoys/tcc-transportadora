<?php
session_start();
allow_url_fopen;
include "conexao.php";

$secret_key = '6LcYyT4aAAAAADQMxJuY1modDkWLLUvdr6jxownY';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
		
	// Valido se a ação do usuário foi correta junto ao google
	$answer = 
		json_decode(
			file_get_contents(
				'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
				'&response='.$_POST['g-recaptcha-response']
			)
		);

	// Se a ação do usuário foi correta executo o restante do meu formulário
	if($answer->success) {
            
$usuario = $_POST['usuario'];
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
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$rowcount = mysqli_num_rows($mysqli->query($sql));
$sqlcnpj = "SELECT * FROM clientesEmpresas WHERE cnpj = '$cnpj'";
$rowcountcnpj = mysqli_num_rows($mysqli->query($sqlcnpj));
if ($usuario == "" || $senha == "" || $senha_conf == "" || $nome == "" || $cnpj == "" || $telefone == "" || $descricao == "" || $email == "" || $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" || $complemento == "") {
    echo "<script language='javascript' type='text/javascript'>
    alert('Todos os campos devem ser preenchidos.');
    window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($senha != $senha_conf) {
    //SE AS SENHAS NÃO CORRESPONDEREM
    echo "<script language='javascript' type='text/javascript'>
    alert('As senhas não coincidem.');window.location.
    href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcount >= 1) {
    echo "<script language='javascript' type='text/javascript'>
    alert('Desculpe, este usuário já existe.');
    window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountcnpj == 1) {
    echo "<script language='javascript' type='text/javascript'>
    alert('Já foi cadastrada uma empresa com este CNPJ.\\nUtilize a opção para alterar ou excluir na página da empresa ou entre em contato.');
    window.location.href='javascript:window.history.go(-1)'</script>"; //excecao funcionario
    
} else {
    $sql1 = "INSERT INTO usuarios (usuario, senha, nivel_acesso) VALUES('$usuario','$senha','1');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
    $sql2 = "INSERT INTO clientesEmpresas (nome, cnpj, telefone, email, descricao, id_clienteEmpresa) values('$nome','$cnpj','$telefone','$email','$descricao','$idCriado');";
    $sql3 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','$idCriado')";
    $mysqli->query($sql2);
    $mysqli->query($sql3);
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        if (isset($_SESSION['usuarioId'])){
            if ($_SESSION['usuarioNivelAcesso'] == "2" || $_SESSION['usuarioNivelAcesso'] == "3") {
                if ($_SESSION['usuarioNivelAcesso'] == "3") {
                    echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='PagAdm.php'</script>";
                } else {
                    echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='PagFuncCliEmpresas.php'</script>";
                }
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='PagLogin.php'</script>";
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário');window.location.href='javascript:window.history.go(-1)'</script>";
    }
}}else{
    echo"<script language='javascript' type='text/javascript'>alert('Verifique o Captcha!');window.history.go(-1);</script>";
}}
?>
