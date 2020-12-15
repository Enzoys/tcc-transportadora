<?php
include "Confere_1.php";
include "cabecalho.php";
?>
<title>Página Cliente</title>
<div style="background-color: lightyellow; width:70%; height: 100%; float:right">
    <table border="2">
        <tr>
            <th>Data de Solicitação</th>
            <th>Número do pedido</th>
            <th>Descrição</th>
            <th>Origem</th>
            <th>Destino</th>
            <th>Status</th>
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
<div style="background-color: lightcoral; width:30%; height: 100%; text-align: center;">
    <a href="PagClienteFazerPedido.php">Novo Pedido</a><br />
    <a href="PagClienteAlterarDados.php">Alterar Dados Cadastrais</a><br />
    <br /><a href="sairSessao.php">Sair</a>
</div>
<?php 
include "rodape.php";
?>