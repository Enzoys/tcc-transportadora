<?php
    include"Confere_1.php";
    include('cabecalho.php');
    $idlogin = $_SESSION['usuarioId'];
    $sqlpagina="SELECT * FROM clientesPessoas where id_clientePessoa like '$idlogin'";
    $selecionador = mysqli_num_rows($mysqli->query($sqlpagina));
    ?><div style="background-color: #fffb99; width:70%; height: 100%; float:right"><?php
    if ($selecionador=='1'){
        $sql = "SELECT * from clientesPessoas where id_usuario='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
               
                echo '<tr>';
                    echo '<td>'.'Nome: '.$row['nome'].'</td>';
                    echo '<td>'.'CPF: '.$row['cpf'].'</td>';
                    echo '<td>'.'Telefone: '.$row['telefone'].'</td>';
                    echo '<td>'.'Email: '.$row['email'].'</td>';
                    echo '</tr>';
                    }                  
            }
?>  
    <form method="post" action="AlteraDados.php">
        <table width="200" border="2">
            <input type="hidden" id="id" name="id" value="<?php echo $idlogin;?>">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">                                  
            <tr>
                <td align="right">Alterar dado:</td>
            <td>
                <select name="dado">
                    <option value="nome">Nome</option>
                    <option value="cpf">CPF</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
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
    }else{
        $sql = "SELECT * from clientesEmpresas where id_usuario='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
               
                echo '<tr>';
                    echo '<td>'.'Nome: '.$row['nome'].'</td>';
                    echo '<td>'.'CNPJ: '.$row['cnpj'].'</td>';
                    echo '<td>'.'Telefone: '.$row['telefone'].'</td>';
                    echo '<td>'.'Email: '.$row['email'].'</td>';
                    echo '</tr>';
                    }                  
            }
?>
        <form method="post" action="AlteraDados.php">
        <table width="200" border="2">
            <input type="hidden" id="id" name="id" value="<?php echo $idlogin;?>">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesEmpresas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clienteEmpresa">                                  
            <tr>
                <td align="right">Alterar dado:</td>
            <td>
                <select name="dado">
                    <option value="nome">Nome</option>
                    <option value="cnpj">CNPJ</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
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
    }
?>
        </div>
<div style="background-color: #ea8a82; width:30%; height: 100%; text-align: center;">
    PEDIDOS<br />
    <a href="PagClienteFazerPedido.php">Novo Pedido</a><br />
    <br />CONTA<br />
    <a href="PagClienteAlterarDados.php">Alterar Dados Cadastrais</a><br />
    <a href="PagClienteEnderecos.php">Meus endereços</a><br />
    <br /><a href="sairSessao.php">Sair</a><br>
    <br /><a href='PagCliente.php'>VOLTAR</a>
</div>
<?php 
include "rodape.php";
?>

