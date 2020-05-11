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
             "<br/>";
    }

}
include "desconecta.php";
?>