<?php
include "confere_3.php";
include "cabecalho.php";
include "conexao.php";
$cpffunc = $_REQUEST["txtfuncionarioCpf"]; // RETOMA A VARIAVEL DE CONSULTA
$sql = "SELECT * FROM funcionarios where cpf like '%$cpffunc%'"; // SELECIONA OS FUNCIONARIOS
// --> CRIAR JOIN COM ENDERECO <--
//DE ACORDO COM O METODO UTILIZADO
if ($result = $mysqli->query($sql)) {
    echo  "<br />";
    while ($row = $result->fetch_assoc()) {
        echo " Nome do Funcionário: " . $row["nome"] .
            " CPF: " . $row["cpf"] .
            " Carteira de Trabalho: " . $row["ctps"] .
            " Telefone: " . $row["telefone"] .
            " Email: " . $row["email"] .
            " ID: " . $row["id_funcionario"] .
            "<br />";
    }
}

?>

<title>Pesquisar Funcionários por CPF</title>
<!-- SABENDO O ID E OS DADOS DO FUNCIONÁRIO, O ADMINISTRADOR
        TEM A OPÇÃO DE EXCLUÍ-LO OU EFETUAR UMA NOVA BUSCA-->
<a href="PagAdmPesquisaFuncionario.php">ALTERAR MÉTODO DE BUSCA</a>
<form method="post" action="PesquisaFuncionarioCpf.php">
    <!-- ENVIA NOVAMENTE PARA A PESQUISA -->
    <table width="200" border="2">
        <tr>
            <td align="right">Nova busca:</td>
            <td><input type="text" name="txtfuncionarioCpf" size="40" /></td>
        </tr>
        <tr>
            <td align="right">&nbsp;</td>
            <td><input type="submit" value="PESQUISAR" /></td>
        </tr>
    </table>
</form>

<form method="post" action="ApagaCompleto.php">
    <!-- ENVIA PARA A EXCLUSÃO -->
    <table width="200" border="2">
        <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="funcionarios" />
        <!-- INDICA DE QUAL TABELA IRA APAGAR-->
        <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_funcionario" />
        <!-- INDICA DE QUAL ATRIBUTO IRA APAGAR-->
        <tr>
            <td align="right">ID do funcionário:</td>
            <td><input type="text" name="id" size="5" /></td>
            <td align="right">(APAGA TODOS OS DADOS DO FUNCIONÁRIO)</td>
        </tr>
        <tr>
            <td align="right">&nbsp;</td>
            <td><input type="submit" value="APAGAR" /></td>
        </tr>
    </table>
</form>
<?php 
    include "rodape.php";
?>
