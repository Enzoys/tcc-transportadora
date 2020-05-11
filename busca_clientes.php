<?php
include 'cabecalho.php'; ?>
<?php
include "conexao.php";
$cliente = $_POST["txtcliente"];
$sql = "select * from clientes where nome like '%$cliente%'";
if ($result === $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " .
            $row["nome"] .
            " CPF: " .
            $row["cpf"] .
            " Telefone: " .
            $row["telefone"] .
            " Email: " .
            $row["email"] .
            " Endereço: " .
            $row["endereco"] .
            "<br>";
    }
    $result->close();
}
$mysqli->close();
?>
<?php include 'rodape.php'; ?>
