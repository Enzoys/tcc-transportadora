<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body>
        <a href="index.php">Voltar </a>
        
        <?php
            include "conexao.php"; 
            $sql="SELECT * FROM clientes";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome do cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " Endereço: ". $row["endereco"] ."<br/>";
                }
               
            }
            include "desconecta.php";
        ?>
   </body>
      
</html>
