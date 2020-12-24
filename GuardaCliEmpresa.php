<?php
//include 'Confere_1.php'; excecao impedir de digitar na pagina porem sem checar o usuario
include "conexao.php";
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
    //SE AS NÃO CORRESPONDEREM
    echo "<script language='javascript' type='text/javascript'>
            alert('As senhas não coincidem.');window.location.
            href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcount >= 1) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Desculpe, este usuário já existe.');
        window.location.href='javascript:window.history.go(-1)'</script>";
} elseif ($rowcountcnpj == 1) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Já foi cadastrada uma empresa com este CNPJ.\\nUtilize a opção para alterar ou excluir na página do empresa ou entre em contato.');
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
    echo $sql1;
    echo $sql2;
    echo $sql3;
    echo $rowcount;
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>" . "alert('Usuário cadastrado com sucesso!');window.location.href='PagLogin.php'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>" . "alert('Não foi possível cadastrar o usuário');window.location.href='javascript:window.history.go(-1)'</script>";
    }
}
