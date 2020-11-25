<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Clientes por CPF</title>
        <?php
            include "conexao.php";// CONECTA AO BANCO
            $cliente= $_REQUEST["txtcliente"];// RETOMA A VARIAVEL DE CONSULTA
            $sql="SELECT * FROM clientes where cpf like '%$cliente%'";// SELECIONA OS CLIENTES 
            //DE ACORDO COM O METODO UTILIZADO 
            if($result=$mysqli->query($sql)){
                while($row=$result->fetch_assoc()){
                    echo " Nome do Cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_cli"]."<br/>";
                }              
            }
            include "desconecta.php";
        ?>
        <!-- SABENDO O ID E OS DADOS DO CLIENTE, O ADMINISTRADOR OU FUNCIONARIO 
        TEM A OPÇÃO DE EXCLUÍ-LO OU EFETUAR UMA NOVA BUSCA-->
        <a href="form_pesquisa_cliente.php">ALTERAR MÉTODO DE BUSCA</a>
        <form method="post" action="PesquisaClientecpf.php"><!-- ENVIA NOVAMENTE
        PARA A PESQUISA -->
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
 
        <form method="post" action="apagartudo.php"><!-- ENVIA PARA A EXCLUSÃO --> 
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientes"><!-- INDICA DE QUAL TABELA IRA APAGAR-->
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_cli"><!-- INDICA DE QUAL ATRIBUTO IRA APAGAR-->
            <input type="hidden" id="cncpcnt" name="cncpcnt" value="cpf"><!-- INDICA DE QUAL ATRIBUTO DE COMPARAÇÃO IRA APAGAR-->
            <tr>
                <td align="right">ID do cliente:</td>
                <td><input type="text" name="id" size="5"></td>
                <td align="right">(APAGA TODOS OS DADOS DO CLIENTE!)</td>
                
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