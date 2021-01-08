<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Empresas por e-mail</title>
        <?php
            include "conexao.php";
            $cliente= $_REQUEST["txtcliente"];
            $sql="SELECT * FROM clientesEmpresas where id_clienteEmpresa like '%$cliente%'";
            if($result=$mysqli->query($sql)){
            echo "<br>";
                while($row=$result->fetch_assoc()){
                    echo " Nome do Cliente: ".$row["nome"].
                         " CNPJ: ".$row["cnpj"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_clienteEmpresa"].
                         " Descrição: ".$row["descricao"]."<br/>";
                }              
            }
        ?>
        <a href="PagFuncPesquisaCliEmpresa.php">ALTERAR MÉTODO DE BUSCA</a>
        <form method="post" action="PesquisaCliEmpresaID.php">
        <table width="200" border="2">
            <tr>
                <td align="right">Nova busca:</td>
                <td><input type="text" name="txtcliente" size="40" /></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="PESQUISAR" /></td>
            </tr>
        </table>
        </form>
 
        <form method="post" action="ApagaCompleto.php">
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesEmpresas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clienteEmpresa">
            <tr>
                <td align="right">ID da Empresa:</td>
                <td><input type="text" name="id" size="5"></td>
                <td align="right">(APAGA TODOS OS DADOS DA EMPRESA!)</td>
                
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="APAGAR" /></td>
            </tr>
        </table>
        </form>
<?php
    include ('rodape.php');
?>