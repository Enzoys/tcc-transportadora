<?php
    include "Confere_2.php";
    ?>
    <?php
    include ('cabecalho2.php');
?>
<title>Pesquisar Clientes por ID</title>
<div style="background-color: #343a40; width:100%; height: 100%;">
        <h2 style="color:white; text-align:center;">Pesquisar Clientes por ID</h2>
        <table class="table table-hover table-dark" border="1">
            <tr>
                <th style="color:white; text-align:center;">Nome do cliente</th>
                <th style="color:white; text-align:center;">CPF</th>
                <th style="color:white; text-align:center;">Telefone</th>
                <th style="color:white; text-align:center;">Email</th>
                <th style="color:white; text-align:center;">ID</th>
            </tr>
        <?php
            include "conexao.php";
            $cliente= $_REQUEST["txtcliente"];
            $sql="SELECT * FROM clientesPessoas where id_clientePessoa like '%$cliente%'";
            if($result=$mysqli->query($sql)){
                echo "<br>";
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

        <form method="post" action="PesquisaCliPessoaID.php">
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
        
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">
            <tr>
                <td style="text-align:right">ID do cliente:</td>
                <td><input type="text" name="id" size="5"></td>

                
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input class="btn btn-primary btn-lg" type="submit" value="APAGAR" /></td>
            </tr>
       
        </form>
        <form method="post" action="AlteraDados.php">
        
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">
            <tr>
                <td style="text-align:right">ID da pessoa:</td>
                <td><input type="text" name="id" size="5"></td>               
            </tr>
            <tr>
                <td style="text-align:right">Alterar dado:</td>
            <td>
                <select name="dado">
                    <option value="nome">Nome</option>
                    <option value="cpf">CPF</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
                </select>
            </td>              
            </tr>
            <tr>
                <td style="text-align:right">Novo dado:</td>
                <td><input type="text" name="novodado"></td>              
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input class="btn btn-primary btn-lg" type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
        </form>
<?php
    include ('rodape.php');
?>