<?php
include "confere_3.php";
include "cabecalho.php";
include "conexao.php";
$nomefunc = $_REQUEST["txtfuncionarioNome"]; // RETOMA A VARIAVEL DE CONSULTA
$sql = "SELECT * FROM funcionarios where nome like '%$nomefunc%'"; // SELECIONA OS FUNCIONARIOS
// --> CRIAR JOIN COM ENDERECO <--
//DE ACORDO COM O METODO UTILIZADO
if ($result = $mysqli->query($sql)) {
    echo "<br>";
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
//include "desconectaBanco.php";
?>
<br>

<title>Pesquisar Funcionários por nome</title>
<!-- SABENDO O ID E OS DADOS DO FUNCIONÁRIO, O ADMINISTRADOR
        TEM A OPÇÃO DE EXCLUÍ-LO OU EFETUAR UMA NOVA BUSCA-->
<a href="PagAdmPesquisaFuncionario.php">ALTERAR MÉTODO DE BUSCA</a>
<form method="post" action="PesquisaFuncionarionome.php">
    <!-- ENVIA NOVAMENTE PARA A PESQUISA -->
    <table width="200" border="2">
        <tr>
            <td align="right">Nova busca:</td>
            <td><input type="text" name="txtfuncionarioNome" size="40" /></td>
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

<form method="post" action="AlteraDados.php">
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="funcionarios">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_funcionario">
            <tr>
                <td align="right">ID do funcionário:</td>
                <td><input type="text" name="id" size="5"></td>               
            </tr>
            <tr>
                <td align="right">Alterar dado:</td>
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
                <td align="right">Novo dado:</td>
                <td><input type="text" name="novodado"></td>              
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
        </form>
<?php 
    include "rodape.php";
?>