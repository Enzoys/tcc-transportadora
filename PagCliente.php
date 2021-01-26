<?php
include "Confere_1.php";
include "cabecalho2.php";
?>
<title>Página Cliente</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
    <h2 style="color:white; text-align:center;">Meus Pedidos</h2>
    <table class="table table-hover table-dark" border="1">
        <tr>
            <th style="color:white; text-align:center;">Data de Solicitação</th>
            <th style="color:white; text-align:center;">Número do pedido</th>
            <th style="color:white; text-align:center;">Descrição</th>
            <th style="color:white; text-align:center;">Origem</th>
            <th style="color:white; text-align:center;">Destino</th>
            <th style="color:white; text-align:center;">Status</th>
        </tr>
        <?php
        $idlogin = $_SESSION['usuarioId'];
        $sql = "SELECT pedidos.*,
                CONCAT(e1.endereco,', ', e1.numero,', ', e1.complemento,', ', e1.bairro,', ', e1.cidade,', ', e1.estado) as origem,
                CONCAT(e2.endereco,', ', e2.numero,', ', e2.complemento,', ', e2.bairro,', ', e2.cidade,', ', e2.estado) as destino
                FROM pedidos 
                join enderecos as e1 on e1.id_endereco = pedidos.id_enderecoOrigem
                join enderecos as e2 on e2.id_endereco = pedidos.id_enderecoDestino
                where pedidos.id_cliente='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<td>' . date("d/m/Y", strtotime($row['data_pedido'])) . ' às ' . date("H:i", strtotime($row['hora_pedido'])) . '</td>';
                    echo '<td>' . $row['id_pedido'] . '</td>';
                    echo '<td>' . $row['descricao_pedido'] . '</td>';                    
                    echo '<td>' . $row['origem'] . '</td>';
                    echo '<td>' . $row['destino'] . '</td>';
                    echo '<td>' . $row['status_pedido'] . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>
<?php 
include "rodape.php";
?>