<?php
    include "confere_2.php";
    include ('cabecalho2.php')
?>
<title>Listar Empresas</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
    <h2 style="color:white; text-align:center;">Gerenciamento de Transportes</h2>
    <table class="table table-hover table-dark" border="1">
        <tr>
            <th style="color:white; text-align:center;">Nome da Empresa</th>
            <th style="color:white; text-align:center;">CNPJ</th>
            <th style="color:white; text-align:center;">Telefone</th>
            <th style="color:white; text-align:center;">Email</th>
            <th style="color:white; text-align:center;">ID</th>
            <th style="color:white; text-align:center;">Descrição</th>
        </tr>
        <?php
            include "conexao.php"; 
            $sql="SELECT * FROM clientesEmpresas";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo '<tr>';
                        echo '<td>' .$row["nome"]. '</td>' ;
                        echo '<td>' .$row["cnpj"]. '</td>' ;
                        echo '<td>' .$row["telefone"]. '</td>' ;
                        echo '<td>' .$row["email"]. '</td>' ;
                        echo '<td>' .$row["id_clienteEmpresa"]. '</td>' ;
                        echo '<td>' .$row["descricao"]. '</td>' ;
                    echo '</tr>';
                }
               
            }
            //include "desconectaBanco.php";
        ?>
            </div>
<?php
    include ('rodape.php');
?>
