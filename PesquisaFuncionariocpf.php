<?php
include "Confere_3.php";
include "cabecalho2.php";
include "conexao.php";
?>
<div style="background-color: #343a40; width:100%; height: 100%;">
<title>Pesquisar Funcionario por CPF</title>
        <h2 style="color:white; text-align:center;">Pesquisar Funcionario por CPF</h2>
        <table class="table table-hover table-dark" border="1">
            <tr>
                <th style="color:white; text-align:center;">Nome do funcionario</th>
                <th style="color:white; text-align:center;">CPF</th>
                <th style="color:white; text-align:center;">CTPS</th>
                <th style="color:white; text-align:center;">Telefone</th>
                <th style="color:white; text-align:center;">Email</th>
                <th style="color:white; text-align:center;">ID</th>
            </tr>
<?php
$cpffunc = $_REQUEST["txtfuncionarioCpf"]; // RETOMA A VARIAVEL DE CONSULTA
$sql = "SELECT * FROM funcionarios where cpf like '%$cpffunc%'"; // SELECIONA OS FUNCIONARIOS
// --> CRIAR JOIN COM ENDERECO <--
//DE ACORDO COM O METODO UTILIZADO
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["cpf"] . '</td>';
        echo '<td>' . $row["ctps"] . '</td>';
        echo '<td>' . $row["telefone"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["id_funcionario"] . '</td>';
            echo '</tr>';
    }
}

?>
</table>



<form method="post" action="PesquisaFuncionariocpf.php">
    <!-- ENVIA NOVAMENTE PARA A PESQUISA -->
    <table class="table table-hover table-dark" border="1">
        <tr>
            <td style="text-align:right">Nova busca:</td>
            <td><input type="text" name="txtfuncionariocpf" size="40" /></td>
        </tr>
        <tr>
            <td style="text-align:right">&nbsp;</td>
            <td><input class="btn btn-primary btn-lg" type="submit" value="PESQUISAR" /></td>
        </tr>

</form>

<form method="post" action="ApagaCompleto.php">
    <!-- ENVIA PARA A EXCLUSÃO -->
    
        <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="funcionarios" />
        <!-- INDICA DE QUAL TABELA IRA APAGAR-->
        <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_funcionario" />
        <!-- INDICA DE QUAL ATRIBUTO IRA APAGAR-->
        <tr>
            <td style="text-align:right">ID do funcionário:</td>
            <td><input type="text" name="id" size="5" /></td>
        </tr>
        <tr>
            <td style="text-align:right">&nbsp;</td>
            <td><input class="btn btn-primary btn-lg" type="submit" value="APAGAR" /></td>
        </tr>
   
</form>
<form method="post" action="AlteraDados.php">
        
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="funcionarios">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_funcionario">
            <tr>
                <td style="text-align:right">ID do funcionário:</td>
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
                    <option value="ctps">Numero CNT</option>
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
    include "rodape.php";
?>