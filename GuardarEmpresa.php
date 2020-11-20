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
            include "conexao.php";
            $nomemp     = $_POST['nomemp'];
            $cnpj    = $_POST['cnpj'];
            $telefone    = $_POST['telefone'];
            $email   = $_POST['email'];
            $desc   = $_POST['desc'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            
            $sql = "INSERT INTO empresas(nome, cnpj, telefone, email, descricao)".
            " values('$nomemp', '$cnpj', '$telefone','$email', '$desc')";
            $sql2 = "INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento, id) ".
            "values('$estado', '$cidade', '$bairro','$rua','$numero', '$complemento', '$cpf')";
                   
            $mysqli->query($sql);  // efetua o cadastro
            $mysqli->query($sql2);
            if ($mysqli->insert_id == TRUE) {
        ?>
        <script type="text/javascript">
            alert("Cadastrado com Sucesso! ");
        </script>
        <?php
        }
                include "./ListaEmpresa.php";
        ?>
    </body>
</html>
