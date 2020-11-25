<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Pesquisar Empresas por Nome</title>
        <?php
            include "conexao.php";
            $empresa= $_REQUEST["txtempresa"];
            $sql="SELECT * FROM empresas where nome like '%$empresa%'";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome da Empresa: ".$row["nomemp"].
                         " CNPJ: ".$row["cnpj"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " Id: ".$row["id_emp"].
                         " Descrição: ".$row["desc"]."<br/>";
                }
               
            }
            include "desconecta.php";
        ?>
        <a href="form_pesquisa_empresas.php">ALTERAR MÉTODO DE BUSCA</a>
        <form method="post" action="PesquisaClientenome.php">
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
 
        <form method="post" action="apagartudo.php">
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientes">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_cli">
            <input type="hidden" id="cncpcnt" name="cncpcnt" value="cpf">
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