<?php
    include "confere_3.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Listar Funcionários</title>
        <a href="http://localhost/tcc1/pagFuncionarios.php">MENU ANTERIOR</a>
        <a href="adm.php">Voltar</a>
        
        <?php
            include "conexao.php"; 
            $sql="SELECT * FROM funcionarios";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome do cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["cod_fun"]."<br/>";                        
                }
               
            }
            include "desconecta.php";
        ?>
<?php
    include ('rodape.php');
?>