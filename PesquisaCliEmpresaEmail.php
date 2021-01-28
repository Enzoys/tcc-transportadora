<?php
    include "Confere_2.php";
?>
<?php
    include ('cabecalho2.php')
?>
<title>Pesquisar Empresas por e-mail</title>
<div style="background-color: #343a40; width:100%; height: 100%;">
        <h2 style="color:white; text-align:center;">Pesquisar Clientes por Email</h2>
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
            $cliente= $_REQUEST["txtcliente"];
            $sql="SELECT * FROM clientes where email like '%$cliente%'";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>' .$row['nome']. '</td>';
                    echo '<td>' .$row['cnpj']. '</td>';
                    echo '<td>' .$row['telefone']. '</td>';
                    echo '<td>' .$row['email']. '</td>';
                    echo '<td>' .$row["id_clienteEmpresa"]. '</td>';
                    echo '<td>' .$row["descricao"]. '<td>';
                echo '</tr>'; 
                }              
            }
            include "desconecta.php";
        ?>
        
        <form method="post" action="PesquisaCliPessoaEmail.php">
        <table class="table table-hover table-dark" border="1">
            <tr>
                <td style="text-align:right">Nova busca:</td>
                <td><input type="text" name="txtcliente" size="40" /></td>
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input class="btn btn-primary btn-lg" type="submit" value="PESQUISAR" /></td>
            </tr>
        
        </form>
 
        <form method="post" action="ApagaCompleto.php">
        
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientes">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_cli">
            <input type="hidden" id="cncpcnt" name="cncpcnt" value="cpf">
            <tr>
                <td style="text-align:right">ID do cliente:</td>
                <td><input type="text" name="id" size="5"></td>
                
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input class="btn btn-primary btn-lg" type="submit" value="APAGAR" /></td>
            </tr>
        </table>
        </form>
        </div>
<?php
    include ('rodape.php');
?>