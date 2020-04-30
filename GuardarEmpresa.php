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
            $endereco   = $_POST['endereco'];
            $desc   = $_POST['desc'];
            $sql = "INSERT INTO empresas(nome, cnpj, telefone, email, endereco, descricao)".
            " values('$nomemp', '$cnpj', '$telefone','$email','$endereco', '$desc')";
           
           
            echo $sql;
            $mysqli->query($sql);  // efetua o cadastro
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
