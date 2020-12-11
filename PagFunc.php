<?php
    include "Confere_2.php";
    include "cabecalho.php";
?>
<title>Página Funcionário</title>
<div style="background-color: lightyellow; width:70%; height: 100%; float:right">
    <table border="2">
        <tr>
            <th>Id do Transporte</th>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Origem</th>
            <th>Destino</th>
        </tr>
        <?php
        /*$sql = "SELECT viagens.*,
                IFNULL(
                    (select clientesEmpresas.nome from clientesEmpresas join viagens on id_clienteEmpresa = viagens.id_cliente), 
                    (select clientesPessoas.nome from clientesPessoas join viagens on id_clientePessoa = viagem.id_cliente)
                ), 
                e1.*, e2.*
                FROM viagens 
                join enderecos as e1 on enderecos.id_endereco = viagens.id_enderecoOrigem
                join enderecos as e2 on enderecos.id_endereco = viagens.id_enderecoDestino";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<td>' . $row['id_viagem'] . '</td>';
                    echo '<td>' . $row[6] . '</td>';                    
                    echo '<td>' . $row['descricao_viagem'] . '</td>';
                    echo '<td>' . $row['nomeEndereco_destino'] . '</td>';
                    echo '<td>' . $row['status_pedido'] . '</td>';
                echo '</tr>';
            }
        }*/
        ?>
    </table>
</div>
<div style="background-color: lightcoral; width:30%; height: 100%; text-align: center;">
        TRANSPORTES<br />
        <a href="PagFuncCriarViagem.php">Novo transporte</a><br />
        <a href="PagFuncCadastroMotorista.php">Cadastrar Motorista</a><br />
        <br />CLIENTES<br />
        <a href="PagFuncCliPessoas.php">Pessoas Físicas</a><br />
        <a href="PagFuncCliEmpresas.php">Empresas</a><br />
    <br />
    <a href="sairSessao.php">Sair</a>
</div>

<?php
    include "rodape.php";
?>
