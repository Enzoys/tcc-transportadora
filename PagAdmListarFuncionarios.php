<?php
include "Confere_3.php";
include "cabecalho.php";
?>
<title>Listar Funcionários</title>
<a href="PagAdmFuncionarios.php">MENU ANTERIOR</a>
<a href="PagAdm.php">Voltar</a>

<?php
include "conexao.php";
$sql = "SELECT * FROM funcionarios";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome do funcionário: " . $row["nome"] .
            " CPF: " . $row["cpf"] .
            " Telefone: " . $row["telefone"] .
            " Email: " . $row["email"] .
            " Carteira de Trabalho: " . $row["ctps"] .
            " ID: " . $row["id_funcionario"] .
            "<br />";
    }
}
include "desconecta.php";
include "rodape.php";
 ?>