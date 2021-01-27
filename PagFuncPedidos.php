<?php
include "Confere_2.php";
include "cabecalho2.php";
?>
<title>Página Pedidos</title>
<div style="background-color: #343a40; width:100%; height: 100%; float:right">
    <h2 style="color:white; text-align:center;">Gerenciamento de Pedidos de Clientes</h2>
    <table class="table table-hover table-dark" border="1">
        <tr>
            <th style="color:white; text-align:center;">Data de Solicitação</th>
            <th style="color:white; text-align:center;">Número do pedido</th>
            <th style="color:white; text-align:center;">ID do cliente</th>
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
                order by status_pedido";
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
                echo '<tr>';
                    echo '<td>';
                    echo '<form method="post" action="AlteraStatus.php">'
                            . '<input type="hidden" name="id_pedido" value="'.$row['id_pedido'].'">';
                            if ($row['status_pedido'] == "1. Em análise"){
                            echo '<input class="btn btn-primary btn-lg" type="hidden" value="Recusar" name="verifica">'
                                . '<input class="btn btn-secondary btn-lg" type="submit" value="Recusar" name="Recusar"></form>';
                            }else{
                           echo '<input class="btn btn-primary btn-lg" type="hidden" value="Excluir" name="verifica">'
                            . '<input class="btn btn-secondary btn-lg" type="submit" value="Excluir" name="Excluir"></form>';}
                    echo '</td>';
                    
                    echo '<td>';
                    echo '<form method="post" action="AlteraStatus.php">'
                            . '<input type="hidden" name="id_pedido" value="'.$row['id_pedido'].'">'
                            . '<input type="hidden" value="'.$row['status_pedido'].'" name="status">'
                            . '<input class="btn btn-primary btn-lg" type="hidden" value="Alterar" name="verifica">';
                            if ($row['status_pedido'] == "1. Em análise"){
                            echo '<input class="btn btn-primary btn-lg" type="submit" value="Aceitar" name="Aceitar"></form>';
                            }elseif($row['status_pedido'] == "4. Concluído" || $row['status_pedido'] == "5. Recusado" || $row['status_pedido'] == "6. cancelado"){                               
                            }else{
                           echo '<input class="btn btn-primary btn-lg" type="submit" value="Avançar" name="Avançar"></form>';}
                    echo '</td>';
                    
                    if ($row['status_pedido'] == "2. Aprovado"){
                        $sql2 = mysqli_query($mysqli,
                                "Select 
                                concat(nome,'  |  ID:', id_motorista)
                                as Motoristas FROM motoristas ORDER BY 1");
                            echo '<form method="post" action="GuardaViagem.php">'
                            . '<input type="hidden" name="direcionador" value="1">'
                            . '<input type="hidden" name="cliente" value="'.$row['id_cliente'].'">'
                            . '<input type="hidden" name="descricao" value="'.$row['descricao_pedido'].'">'
                            . '<input type="hidden" name="endereco" value="'.$row['id_enderecoOrigem'].'">'
                            . '<input type="hidden" name="endereco2" value="'.$row['id_enderecoDestino'].'">'
                            . '<input type="hidden" name="pedido" value="'.$row['id_pedido'].'">'
                            . '<td>'
                            . 'Motorista:<select name="motorista">';
                            while ($row2 = mysqli_fetch_array($sql2)) {
                            echo "<option value='" .$row2['Motoristas']. "'>" .$row2['Motoristas']. "</option>";
                        }
                            echo '</select></td>'
                            . '<td>Previsão de chegada:<input type="date" name="data" size="10" />'
                            . '</td>'
                            . '<td>'
                            . '<input class="btn btn-primary btn-lg" type="submit" value="Adicionar Transporte" name="Adicionar Transporte"></form>'
                            .'</td>'                         
                            . '</form>';
                            }
                    //echo '<td>';
                    //echo '<form method="post" action="AlteraDados.php">'
                           // . '<input type="hidden" name="id" value="'.$row['id_pedido'].'">'
                           // . '<select name="dado">'
                           // . '<option value="descricao_pedido">Descrição</option>'
                           // . '<option value="origem">Origem</option>'
                           // . '<option value="destino">Destino</option>'
                           // . '</select>'
                           // . '<input class="btn btn-primary btn-lg" type="hidden" value="Alterar" name="verifica">';
                           // if ($row['status_pedido'] == "1. Em análise"){
                           // echo '<input class="btn btn-primary btn-lg" type="submit" value="Aceitar" name="Aceitar"></form>';
                           // }elseif($row['status_pedido'] == "4. Concluído"){                               
                           // }else{
                           //echo '<input class="btn btn-primary btn-lg" type="submit" value="Avançar" name="Avançar"></form>';}
                   // echo '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</div>

<?php 
include "rodape.php";
?>