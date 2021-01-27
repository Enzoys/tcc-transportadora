<?php
include "Confere_3.php";
include "cabecalho2.php";
?>
<div style="background-color: #343a40; width:100%; height: 100%;">
<title>Listar Funcionários</title>
        <h2 style="color:white; text-align:center;">Listar Funcionários</h2>
        <table class="table table-hover table-dark" border="1">
            <tr>
                <th style="color:white; text-align:center;">Nome do funcionario</th>
                <th style="color:white; text-align:center;">CPF</th>
                <th style="color:white; text-align:center;">Telefone</th>
                <th style="color:white; text-align:center;">Email</th>
                <th style="color:white; text-align:center;">CTPS</th>
                <th style="color:white; text-align:center;">ID</th>
            </tr>
<?php
include "conexao.php";
$sql = "SELECT * FROM funcionarios";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["nome"] . '</td>'
        echo '<td>' . $row["cpf"] . '</td>'
        echo '<td>' . $row["telefone"] . '</td>'
        echo '<td>' . $row["email"] . '</td>'
        echo '<td>' . $row["ctps"] . '</td>'
        echo '<td>' . $row["id_funcionario"] . '</td>'
        echo '<tr>' 

    }
}

include "desconecta.php";
include "rodape.php";
 ?>
 <table>