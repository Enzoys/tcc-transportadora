<?php
    include "Confere_3.php";
    include "cabecalho2.php";
?>
<title>Página ADM</title>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Invicta-X <br>Transportes</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicio</a> 
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Voltar</a> 

    <!--
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    -->
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Invicta-X Transportes</span>
</header>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">


<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
    <h2>Gerenciamento de Transportes</h2>
    <table border="2">
        <tr>
            <th>Previsão de Chegada</th>
            <th>ID do Transporte</th>
            <th>ID do Cliente</th>
            <th>Descrição do Transporte</th>
            <th>Motorista</th>
            <th>Origem</th>
            <th>Destino</th>
            <th>Status</th>
        </tr>
        <?php
        $sql = "SELECT viagens.*, 
                CONCAT(e1.endereco,', ', e1.numero,', ', e1.complemento,', ', e1.bairro,', ', e1.cidade,', ', e1.estado) as origem,
                CONCAT(e2.endereco,', ', e2.numero,', ', e2.complemento,', ', e2.bairro,', ', e2.cidade,', ', e2.estado) as destino
                FROM viagens 
                join enderecos as e1 on e1.id_endereco = viagens.id_enderecoOrigem
                join enderecos as e2 on e2.id_endereco = viagens.id_enderecoDestino";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<td>' . date("d/m/Y", strtotime($row['data_chegada'])) . '</td>';                
                    echo '<td>' . $row['id_viagem'] . '</td>';
                    echo '<td>' . $row['id_cliente'] . '</td>';                    
                    echo '<td>' . $row['descricao_viagem'] . '</td>';
                    echo '<td>' . $row['motorista'] . '</td>';
                    echo '<td>' . $row['origem'] . '</td>';
                    echo '<td>' . $row['destino'] . '</td>';
                    echo '<td>' . $row['status_viagem'] . '</td>';
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
        <br />ADMINISTRADOR<br />
        <a href="PagAdmFuncionarios.php">Funcionários</a><br>
        <a href="pagcriarADM.php">Novo Administrador</a><br>
    <br />
    <a href="sairSessao.php">Sair</a>
</div>
<?php 
    include "rodape.php";
?>
