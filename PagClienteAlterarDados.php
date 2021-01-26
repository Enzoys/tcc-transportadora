<?php
    include"Confere_1.php";
    include('cabecalho2.php');
    $idlogin = $_SESSION['usuarioId'];
    $sqlpagina="SELECT * FROM clientesPessoas where id_clientePessoa like '$idlogin'";
    $selecionador = mysqli_num_rows($mysqli->query($sqlpagina));
    ?>
    <div style="background-color: #343a40; width:100%; height: 100%;padding:20%;padding-left:40%;padding-right:40%;">
    <h2 style="color:white; text-align:center;">Alterar dados</h2>
    <?php
    if ($selecionador=='1'){
        $sql = "SELECT * from clientesPessoas where id_clientePessoa='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo'<table border="2">';
                    echo '<tr>';
                    echo '<td>'.'Nome: '.$row['nome'].'</td>';
                    echo '<td>'.'CPF: '.$row['cpf'].'</td>';
                    echo '<td>'.'Telefone: '.$row['telefone'].'</td>';
                    echo '<td>'.'Email: '.$row['email'].'</td>';
                    echo '</tr>';
                echo'</table>';
                    }                  
            }
?>  
    <form method="post" action="AlteraDados.php">
        <table class="table table-hover table-dark" border="1">
            <input type="hidden" id="id" name="id" value="<?php echo $idlogin;?>">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesPessoas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clientePessoa">                                  
            <tr>
                <td style="color:white; text-align:center;">Alterar dado:</td>
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
                <td style="color:white; text-align:center;">Novo dado:</td>
                <td><input type="text" name="novodado"></td>              
            </tr>
            <tr>
              <td style="color:white; text-align:center;">&nbsp;</td>
              <td><input class="btn btn-primary btn-lg" type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
    </form>
<?php 
    }else{
        $sql = "SELECT * from clientesEmpresas where id_clienteEmpresa='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo'<table class="table table-hover table-dark" border="1">';
                    echo '<tr>';
                    echo '<td>'.'Nome: '.$row['nome'].'</td>';
                    echo '<td>'.'CNPJ: '.$row['cnpj'].'</td>';
                    echo '<td>'.'Telefone: '.$row['telefone'].'</td>';
                    echo '<td>'.'Email: '.$row['email'].'</td>';
                    echo '</tr>';
                echo'</table>';
                    }                  
            }
?>
        <form method="post" action="AlteraDados.php">
        <table class="table table-hover table-dark" border="1">
            <input type="hidden" id="id" name="id" value="<?php echo $idlogin;?>">
            <input type="hidden" id="tabcliempfun" name="tabcliempfun" value="clientesEmpresas">
            <input type="hidden" id="idcliempfun" name="idcliempfun" value="id_clienteEmpresa">                                  
            <tr>
                <td style="color:white; text-align:center;">Alterar dado:</td>
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
                <td style="color:white; text-align:center;">Novo dado:</td>
                <td><input type="text" name="novodado"></td>              
            </tr>
            <tr>
              <td style="color:white; text-align:center;">&nbsp;</td>
              <td><input class="btn btn-primary btn-lg" type="submit" value="ALTERAR" /></td>
            </tr>
        </table>
    </form>
<?php       
    }
?>
        </div>

<?php 
include "rodape.php";
?>

