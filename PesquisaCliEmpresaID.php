<?php
    include "confere_2.php";
    include ('cabecalho2.php');
?>
<title>Pesquisar Empresas por e-mail</title>
<div style="background-color: #343a40; width:100%; height: 100%;">
        <h2 style="color:white; text-align:center;">Pesquisar Clientes por ID</h2>
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
            $sql="SELECT * FROM clientesEmpresas where id_clienteEmpresa like '%$cliente%'";
            if($result=$mysqli->query($sql)){
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
        ?>
        </table>

        <form method="post" action="PesquisaCliEmpresaID.php">
        <table class="table table-hover table-dark" border="1">
            <tr>
                <td style="text-align:right">Nova busca:</td>
                <td><input type="text" name="txtcliente" size="40" /></td>
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input type="submit" value="PESQUISAR" /></td>
            </tr>
        </form>
 
        <form method="post" action="ApagaCompleto.php">
        
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesEmpresas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clienteEmpresa">
            <tr>
                <td style="text-align:right">ID da Empresa:</td>
                <td><input type="text" name="id" size="5"></td>

                
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input type="submit" value="APAGAR" /></td>
            </tr>
        
        </form>
        <form method="post" action="AlteraDados.php">
        
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesEmpresas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clienteEmpresa">
            <tr>
                <td style="text-align:right">ID da empresa:</td>
                <td><input type="text" name="id" size="5"></td>               
            </tr>
            <tr>
                <td style="text-align:right">Alterar dado:</td>
            <td>
                <select name="dado">
                    <option value="nome">Nome</option>
                    <option value="cnpj">CNPJ</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
                    <option value="descricao">Descricao</option>
                </select>
            </td>              
            </tr>
            <tr>
                <td style="text-align:right">Novo dado:</td>
                <td><input type="text" name="novodado"></td>              
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
        </form>
        </div>
<?php
    include ('rodape.php');
?>