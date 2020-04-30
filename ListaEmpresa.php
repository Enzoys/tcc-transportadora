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
            $sql="SELECT * FROM empresas";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome da Empresa: ".$row["nome"].
                         " CNPJ: ".$row["cnpj"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " Endereço: ". $row["endereco"] .
                         " Descrição: ".$row["descricao"]."<br/>";
                }
               
            }
            include "desconecta.php";
        ?>
   </body>
      
</html>
