<?php
    include "banco/confere.php";
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Página Cliente</title>
<CENTER>
        <table border = '2'>

<tr>
  <th>Número do pedido</th>
  <th>Origem</th>
  <th>Destino</th>
  <th>Status</th>
</tr>
        <?php
        $atest=$_SESSION['usuarioAtest'];
        $sql="SELECT * FROM pedidos where pedidos.ident_cliemp='$atest'";
        if($result=$mysqli->query($sql)){
                while($row=$result->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>'. $row['num_pedido'] .'</td>';
                    echo '<td>'. $row['End_Origem'] .'</td>';
                    echo '<td>'. $row['End_Destino'] .'</td>';
                    echo '<td>'. $row['status'] .'</td>';
                    echo '</tr>';
                }
            }?>
        </table>
        <a href="cliente/form_fazer_pedido.php">NOVO PEDIDO</a><br>
        <a href="AlterarDados.php">ALTERAR MEUS DADOS</a><br>
        </CENTER>
    <br>
<a href="banco/sair.php">Sair</a>
<?php
    include ('index/rodape.php');
?>