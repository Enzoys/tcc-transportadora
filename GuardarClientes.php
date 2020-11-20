<?php
    include "confere_2.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
            include "conexao.php";//CONECTA AO BANCO
            //RECEBE OS VALORES DO FORMULARIO
            $nome     = $_POST['nome'];
            $cpf      = $_POST['cpf'];
            $telefone    = $_POST['telefone'];
            $email   = $_POST['email'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            
            //CODIGO PARA INSERIR NA TABELA
            $sql = "INSERT INTO clientes (nome, cpf, telefone, email) " .
            "values('$nome', '$cpf', '$telefone','$email')";
            $sql2 = "INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento, id) ".
            "values('$estado', '$cidade', '$bairro','$rua','$numero', '$complemento', '$cpf')";
           //EXECUTA O CÓDIGO
            $mysqli->query($sql);
            $mysqli->query($sql2);
            if ($mysqli->insert_id == TRUE) { //EXECUTA UMA AÇÃO SE O PROCEDIMENTO
            //TIVER FUNCIONADO
        ?>
        <script type="text/javascript">
            alert("Cadastrado com Sucesso! ");
            window.location.href='form_cadastrar_cliente.php';
        </script>
        <?php
        }
        ?>
    </body>
</html>
