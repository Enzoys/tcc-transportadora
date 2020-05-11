<?php
include 'cabecalho.php'; ?>
<?php
include "conexao.php";
$empresa = $_POST["txtempresa"];
$sql = "select * from empresas where nome like '%$empresa%'";
if ($result === $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome da Empresa: " .
            $row["nomemp"] .
            " CNPJ: " .
            $row["cnpj"] .
            " Telefone: " .
            $row["telefone"] .
            " Email: " .
            $row["email"] .
            " Endereço: " .
            $row["endereco"] .
            "Descrição: " .
            $row["descricao"] .
            "<br />
";
    }
    $result->close();
}
$mysqli->close();
?>
<?php include 'rodape.php'; ?>
