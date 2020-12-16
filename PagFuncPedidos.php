<?php
include "Confere_2.php";
include "cabecalho.php";
?>
<title>Página Pedidos</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
    <h2>Gerenciamento de Pedidos de Clientes</h2>
    <table border="2">
        <tr>
            <th>Data de Solicitação</th>
            <th>Número do pedido</th>
            <th>ID do cliente</th>
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
                order by 7,8 desc";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<td>' . date("d/m/Y", strtotime($row['data_pedido'])) . ' às ' . date("H:i", strtotime($row['hora_pedido'])) . '</td>';
                    echo '<td>' . $row['id_pedido'] . '</td>';
                    echo '<td>' . $row['id_cliente'] . '</td>';
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
<div style="background-color: #ea8a82; width:30%; height: 100%; text-align: center;">
        TRANSPORTES<br />
        <a href="PagFuncPedidos.php">Pedidos</a><br />
        <a href="PagFuncCriarViagem.php">Novo transporte</a><br />
        <a href="PagFuncCadastroMotorista.php">Cadastrar Motorista</a><br />
        <br />CLIENTES<br />
        <a href="PagFuncCliPessoas.php">Pessoas Físicas</a><br />
        <a href="PagFuncCliEmpresas.php">Empresas</a><br />
    <br />
    <a href="sairSessao.php">Sair</a><br />
<?php
if ($_SESSION['usuarioNivelAcesso'] == "3") {
    echo "<br /><a href='PagAdm.php'>VOLTAR</a>";
} else {
    echo "<br /><a href='PagFunc.php'>VOLTAR</a>";
}
?>
</div>
<?php 
include "rodape.php";
?>