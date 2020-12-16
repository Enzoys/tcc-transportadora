<?php
include "Confere_2.php";
include "cabecalho.php";
include "conexao.php";
$sql1 = mysqli_query($mysqli,
    "Select * from (
        (SELECT concat('(empresa) ',clientesEmpresas.nome,' ID:', clientesEmpresas.id_clienteEmpresa)
        as Clientes FROM clientesEmpresas)
        UNION
        (SELECT concat('(pessoa física) ',clientesPessoas.nome, ' ID:', clientesPessoas.id_clientePessoa)
        as Clientes FROM clientesPessoas)
    ) as Clientes ORDER BY 1");
$sql2 = mysqli_query($mysqli,
    "Select 
        concat(nome,' ID:', id_motorista)
        as Motoristas FROM motoristas ORDER BY 1");
?>
<title>Criar Viagem</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
<h2>Registrar Novo Transporte</h2>
<form method="POST" action="GuardaViagem.php">
    <table width="200" border="3px">
        <tr>
            <td align="right">Cliente:</td>
            <td>
                <select name="cliente">
                    <?php
                        while ($row1 = mysqli_fetch_array($sql1)) {
                            echo "<option value='" .substr($row1['Clientes'], strpos($row1['Clientes'],'ID:') + 3). "'>" .$row1['Clientes']. "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">Motorista:</td>
            <td>
                <select name="motorista">
                    <?php
                        while ($row2 = mysqli_fetch_array($sql2)) {
                            echo "<option value='" .$row2['Motoristas']. "'>" .$row2['Motoristas']. "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">Descrição do transporte:</td>
            <td><input type="text" name="descricao" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Previsão de chegada:</td>
            <td><input type="date" name="data" size="10" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="width:100%">Endereço de origem</td>
        </tr>         
        <tr>
            <td align="right">Estado:</td>
            <td>
                <select name="estado">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">Cidade:</td>
            <td><input type="text" name="cidade" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Bairro:</td>
            <td><input type="text" name="bairro" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Endereço:</td>
            <td><input type="text" name="endereco" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Número:</td>
            <td><input type="text" id="num4" data-inputmask="'mask': '9[99999]'" name="numero" size="6" /></td>
        </tr>
        <tr>
            <td align="right">Complemento:</td>
            <td><input type="text" name="complemento" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="width:100%">Endereço de destino</td>
        </tr>         
        <tr>
            <td align="right">Estado:</td>
            <td>
                <select name="estado2">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">Cidade:</td>
            <td><input type="text" name="cidade2" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Bairro:</td>
            <td><input type="text" name="bairro2" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Endereço:</td>
            <td><input type="text" name="endereco2" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Número:</td>
            <td><input type="text" id="num5" data-inputmask="'mask': '9[99999]'" name="numero2" size="6" /></td>
        </tr>
        <tr>
            <td align="right">Complemento:</td>
            <td><input type="text" name="complemento2" size="50" maxlength="50"/></td>
        </tr>        
        <tr>
            <td></td>
            <td><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
    </table>
</form>
</div>
<div style="background-color: #ea8a82; width:30%; height: 100%; text-align: center;">
        TRANSPORTES<br />
        <a href="PagFuncPedidos.php">Pedidos</a><br />
        <a href="PagFuncCriarViagem.php">Novo transporte</a><br />
        <a href="PagFuncCadastroMotorista.php">Cadastrar Motorista</a><br />
        <br />CLIENTES<br />
        <a href="PagFuncCliPessoas.php">Pessoas Físicas</a><br />
        <a href="PagFuncCliEmpresas.php">Empresas</a><br />
    <br />
    <a href="sairSessao.php">Sair</a><br />
<?php
if ($_SESSION['usuarioNivelAcesso'] == "3") {
    echo "<br /><a href='PagAdm.php'>VOLTAR</a>";
} else {
    echo "<br /><a href='PagFunc.php'>VOLTAR</a>";
}
?>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#num4").inputmask("9[99999]", { removeMaskOnSubmit: false });
        $("#num5").inputmask("9[99999]", { removeMaskOnSubmit: false });
    });
</script>
<?php
    include "rodape.php";
?>