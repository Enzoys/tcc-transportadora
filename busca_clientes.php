<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "conexao.php";
            $cliente = $_POST["txtcliente"];
            $sql = "select * from clientes where produto like '%$cliente%'";
            if($result === $mysqli->query($sql)){
                while($row = $result -> fetch_assoc()){
                    echo "Nome: " . $row["nome"] . " CPF: " . $row["cpf"] ." Telefone: " . $row["telefone"] . " Email: " . $row["email"] ." Endereço: " . $row["endereco"] ."<br>";
                }
                $result->close();
            }
            $mysqli->close();
        ?>
    </body>
</html>
