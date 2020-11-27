<?php
include 'Confere_1.php';
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
$sqlcpf = "SELECT * FROM clientes WHERE cpf = '$cpf'"; // VERIFICA SE O CPF COLOCADO JA FOI CADASTRADO
$rowcountcpf = mysqli_num_rows($mysqli->query($sqlcpf)); // SE JÁ HOUVER CPF, RETORNA QUANTOS
if ($usuario == "" || $senha == "" || $senha_conf == "" || $nome == "" || $cpf == "" || $telefone == "" || $email == "" ||
    $estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" || $complemento == "") {
    //GARANTE QUE NENHUM CAMPO ESTEJA VAZIO
    echo "<script language='javascript' type='text/javascript'>" .
    "alert('Todos os campos devem ser preenchidos.');" .
    "window.location.href='javascript:window.history.go(-1)'</script>";
} else {
    if ($rowcount >= 1) {
        //SE A BUSCA POR USUARIO RETORNAR UMA LINHA OU MAIS
        echo "<script language='javascript' type='text/javascript'>
        alert('Desculpe, este usuário já existe.');window.location.
        href='javascript:window.history.go(-1)'</script>";
    } else {
        if ($senha != $senha_conf) {
            //SE AS NÃO CORRESPONDEREM
            echo "<script language='javascript' type='text/javascript'>
            alert('As senhas não coincidem.');window.location.
            href='javascript:window.history.go(-1)'</script>";
        } else {
            if ($rowcountcpf >= 1) {
                //SE A BUSCA POR CPF RETORNAR UMA LINHA OU MAIS
                echo "<script language='javascript' type='text/javascript'>" 
                . "alert('Já foi cadastrado um usuário com este CPF.\nUtilize a opção para alterar ou excluir na página do usuário.');"//excecao funcionario
                . "window.location.href='javascript:window.history.go(-1)'</script>";
            } else {
                //CADASTRA OS DADOS
                $sql1 = "DECLARE @idCliPessoa int";
                $sql2 = "INSERT INTO usuarios (usuario, senha, nivel_acesso) values('$usuario','$senha','1'); ";
                $sql3 = "SET @idCliPessoa = SCOPE_IDENTITY()";
                $sql4 = "INSERT INTO clientes (nome, cpf, telefone, email, id_clientePessoa) values('$nome','$cpf','$telefone','$email',@idCliPessoa);";
                $sql5 = "INSERT INTO endereco (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','$cpf',@idCliPessoa)";
                echo $sql1;
                echo $sql2;
                echo $sql3;
                echo $sql4;
                echo $sql5;
                $mysqli->query($sql1);
                $mysqli->query($sql2);
                $mysqli->query($sql3);
                $mysqli->query($sql4);
                $mysqli->query($sql5);
                $rowcount = mysqli_num_rows($mysqli->query($sql)); //NOVA BUSCA POR USUARIO, PARA VERIFICAR SE O USUARIO FOI INSERIDO
                if ($rowcount == 1) {
                    //SE AGORA, O BANCO RETORNAR 1 LINHA, O CADASTRO FOI EFETUADO
                    echo "<script language='javascript' type='text/javascript'>" 
                    . "alert('Usuário cadastrado com sucesso!');" 
                    . "//window.location.href='PagLogin.php'</script>";
                } else {
                    echo "<script language='javascript' type='text/javascript'>" 
                    . "alert('Não foi possível cadastrar o usuário.');" 
                    . "window.location.href='javascript:window.history.go(-1)'</script>";
                }
            }
        }
    }
}
