<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho2.php')
?>
<title>Pesquisar Clientes por CPF</title>
<div style="background-color: #343a40; width:100%; height: 100%;">
        <h2 style="color:white; text-align:center;">Pesquisar Clientes por CPF</h2>
        <table class="table table-hover table-dark" border="1">
            <tr>
                <th style="color:white; text-align:center;">Nome do cliente</th>
                <th style="color:white; text-align:center;">CPF</th>
                <th style="color:white; text-align:center;">Telefone</th>
                <th style="color:white; text-align:center;">Email</th>
                <th style="color:white; text-align:center;">ID</th>
            </tr>
        <?php
            include "conexao.php";// CONECTA AO BANCO
            $cliente= $_REQUEST["txtcliente"];// RETOMA A VARIAVEL DE CONSULTA
            $sql="SELECT * FROM clientesPessoas where cpf like '%$cliente%'";// SELECIONA OS CLIENTES 
            //DE ACORDO COM O METODO UTILIZADO 
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
            //include "desconecta.php";
        ?>
        </table>
        <!-- SABENDO O ID E OS DADOS DO CLIENTE, O ADMINISTRADOR OU FUNCIONARIO 
        TEM A OPÇÃO DE EXCLUÍ-LO OU EFETUAR UMA NOVA BUSCA-->

        <form method="post" action="PesquisaCliPessoaCpf.php"><!-- ENVIA NOVAMENTE
        PARA A PESQUISA -->
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
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">
            <tr>
                <td style="text-align:right">ID do cliente:</td>
                <td><input type="text" name="id" size="5"></td>

                
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td><input type="submit" value="APAGAR" /></td>
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
              <td><input type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
        </form>
        </div>
<?php
    include ('rodape.php');
?>