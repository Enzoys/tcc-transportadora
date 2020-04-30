<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "conexao.php";
            $empresa= $_REQUEST["txtempresa"];
            $sql="SELECT * FROM empresas where nome like '%$empresa%'";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome da Empresa: ".$row["nomemp"].
                         " CNPJ: ".$row["cnpj"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " Endereço: ".$row["endereco"].
                         " Descrição: ".$row["desc"]."<br/>";
                }
               
            }
            include "desconecta.php";
        ?>
    </body>
</html>
