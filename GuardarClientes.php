<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
            include "conexao.php";
            $nome     = $_POST['nome'];
            $cpf      = $_POST['cpf'];
            $telefone    = $_POST['telefone'];
            $email   = $_POST['email'];
            $endereco   = $_POST['endereco'];
            $sql = "INSERT INTO clientes (nome, cpf, telefone, email, endereco) " .
            "values('$nome', '$cpf', '$telefone','$email,'$endereco')";
           
           
            echo $sql;
            $mysqli->query($sql);  // efetua o cadastro
            if ($mysqli->insert_id == TRUE) {
        ?>
        <script type="text/javascript">
            alert("Cadastrado com Sucesso! ");
        </script>
        <?php
        }
                include "./ListarClientes.php";
        ?>
    </body>
</html>
