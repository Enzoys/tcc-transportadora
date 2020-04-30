<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "conexao.php";
            $empresa = $_POST["txtempresa"];
            $sql = "select * from empresas where produto like '%$empresa%'";
            if($result === $mysqli->query($sql)){
                while($row = $result -> fetch_assoc()){
                    echo "Nome da Empresa: " . $row["nomemp"] . " CNPJ: " . $row["cnpj"] ." Telefone: " . $row["telefone"] . " Email: " . $row["email"] ." Endereço: " . $row["endereco"] . "Descrição: " . $row["desc"] ."<br>";
                }
                $result->close();
            }
            $mysqli->close();
        ?>
    </body>
</html>
