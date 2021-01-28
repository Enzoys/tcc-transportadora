<?php
include "Confere_3.php";
include "cabecalho2.php";
include "conexao.php";
?>
<div style="background-color: #343a40; width:100%; height: 100%;">
<title>Pesquisar Funcionario por Email</title>
        <h2 style="color:white; text-align:center;">Pesquisar Funcionario por Email</h2>
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
$ctps = $_REQUEST["txtfuncionarioctps"]; // RETOMA A VARIAVEL DE CONSULTA
$sql = "SELECT * FROM funcionarios where ctps like '%$ctps%'"; // SELECIONA OS FUNCIONARIOS
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
include "desconecta.php";
?>
</table>

<form method="post" action="PesquisaFuncionarioCpf.php">
    <!-- ENVIA NOVAMENTE PARA A PESQUISA -->
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
    <!-- ENVIA PARA A EXCLUSÃO -->
    
        <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="funcionarios" />
        <!-- INDICA DE QUAL TABELA IRA APAGAR-->
        <input type="hidden" id="idcliempfun" name="idcliempfun" value="cod_fun" />
        <!-- INDICA DE QUAL ATRIBUTO IRA APAGAR-->
        <input type="hidden" id="cncpcnt" name="cncpcnt" value="cpf" />
        <!-- INDICA DE QUAL ATRIBUTO DE COMPARAÇÃO IRA APAGAR-->
        <tr>
            <td style="text-align:right">ID do cliente:</td>
            <td><input type="text" name="id" size="5" /></td>
        </tr>
        <tr>
            <td style="text-align:right">&nbsp;</td>
            <td><input type="submit" value="APAGAR" /></td>
        </tr>
    </table>
</form>
<?php 
    include "rodape.php";
?>
