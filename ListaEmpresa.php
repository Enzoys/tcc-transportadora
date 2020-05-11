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
             " Descrição: ".$row["descricao"]."<br/>";
    }

}
include "desconecta.php";
?>