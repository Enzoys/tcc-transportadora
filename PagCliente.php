<?php
include "confere.php";
include 'cabecalho.php';
?>
<title>Página Cliente</title>
<center>
    <table border="2">
        <tr>
            <th>Número do pedido</th>
            <th>Origem</th>
            <th>Destino</th>
            <th>Status</th>
        </tr>
        <?php
        $idlogin = $_SESSION['id_login'];
        $sql = "SELECT * FROM pedidos where pedidos.id_cliente='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<td>' . $row['id_pedido'] . '</td>';
                    echo '<td>' . $row['descricao_pedido'] . '</td>';                    
                    echo '<td>' . $row['nomeEndereco_origem'] . '</td>';
                    echo '<td>' . $row['nomeEndereco_destino'] . '</td>';
                    echo '<td>' . $row['status_pedido'] . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
    <a href="PagClienteFazerPedido.php">NOVO PEDIDO</a><br />
    <a href="PagClienteAlterarDados.php">ALTERAR MEUS DADOS</a><br />
</center>
<br />
<a href="sairSessao.php">Sair</a>
<?php 
include 'rodape.php';
?>