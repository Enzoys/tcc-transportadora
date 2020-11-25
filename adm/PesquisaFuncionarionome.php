<?php
    include "banco/confere_3.php";
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Pesquisar Funcionários por Nome</title>
        <?php
            include "banco/conexao.php";
            $funcionario= $_REQUEST["txtfuncionario"];
            $sql="SELECT * FROM funcionarios where nome like '%$funcionario%'";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo " Nome do Funcionario: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " CNT: ".$row["cnt"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["cod_fun"]."<br/>";
                }              
            }
            include "banco/desconecta.php";
        ?>
        <a href="adm/form_pesquisa_funcionario.php">ALTERAR MÉTODO DE BUSCA</a>
        <form method="post" action="adm/PesquisaFuncionarionome.php">
        <table width="200" border="2">
            <tr>
                <td align="right">Nova busca:</td>
                <td><input type="text" name="txtfuncionario" size="40" /></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input type="submit" value="PESQUISAR" /></td>
            </tr>
        </table>
        </form>
 
        <form method="post" action="banco/apagartudo.php">
        <table width="200" border="2">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="funcionarios">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="cod_fun">
            <input type="hidden" id="cncpcnt" name="cncpcnt" value="cnt">
            <tr>
                <td align="right">ID do funcionario:</td>
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
    include ('index/rodape.php');
?>