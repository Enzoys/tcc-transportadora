<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho2.php')
?>
<title>Listar Clientes</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
    <h2 style="color:white; text-align:center;">Gerenciamento de Transportes</h2>
    <table class="table table-hover table-dark" border="1">
        <tr>
            <th style="color:white; text-align:center;">Nome do cliente</th>
            <th style="color:white; text-align:center;">CPF</th>
            <th style="color:white; text-align:center;">Telefone</th>
            <th style="color:white; text-align:center;">Email</th>
            <th style="color:white; text-align:center;">ID</th>
        </tr>
        <?php
            //LINK PARA A PAGINA QUE CONECTA AO BANCO
            include "conexao.php";
            //CODIGO SELECT TABELA CLIENTES
            $sql="SELECT * FROM clientesPessoas";
            //SE RECEBER RESULTADO DA QUERY, ENTRA NA ARRAY ASSOCIATIVA 
            //ENQUANTO HOUVER RESULTADOS E LISTA OS CLIENTES
            if($result=$mysqli->query($sql)){
                while($row=$result->fetch_assoc()){
                echo '<tr>';
                    echo '<td>' .$row['nome']. '</td>';
                    echo '<td>' .$row['cpf']. '</td>';
                    echo '<td>' .$row['telefone']. '</td>';
                    echo '<td>' .$row['email']. '</td>';
                    echo '<td>' .$row['id_clientePessoa']. '</td>' ;
                echo '</tr>';                    
                }
               
            }
        ?>
        </table>
        </div>
<?php
    include ('rodape.php');
?>