<?php
include "Confere_1.php";
include "cabecalho.php";
?>
<title>Página Endereços do Cliente</title>
<div style="background-color: #fffb99; width:70%; height: 100%; float:right">
    <h2>Meus Endereços</h2>
    <table border="2">
        <tr>
            <th>Endereço</th>        
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        <?php
        $idlogin = $_SESSION['usuarioId'];
        $sql = "SELECT * from enderecoscad where id_usuario='$idlogin'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
               
                echo '<tr>';
                    echo '<td>'.$row['endereco'].', '.$row['numero'].' | '.$row['bairro'].' | '.$row['cidade'].' - '.$row['estado'].'</td>';
                    echo '<td>' . $row['id_endereco'] . '</td>';
                    echo '<td>  ' . $row['descEnd'] . ' </td>';
                    echo '<td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td>';
                    echo '<form method="post" action="ApagaEndereco.php"><input type="hidden" name="id_endereco" value="'.$row['id_endereco'].'">'
                            . '<input type="hidden" value="Excluir" name="verifica">'
                            . '<input type="submit" value="Excluir" name="Excluir"></form>';

                    echo '<form method="post" action="ApagaEndereco.php"><input type="hidden" name="id_endereco" value="'.$row['id_endereco'].'">'
                            . '<input type="hidden" value="Alterar" name="verifica">'
                            . '<select name="dado">'
                            . '<option value="endereco">Rua</option>'
                            . '<option value="numero">Número</option>'
                            . '<option value="bairro">Bairro</option>'
                            . '<option value="cidade">Cidade</option>'
                            . '<option value="estado">Estado</option>'
                            . '<option value="descEnd">Descrição</option>'
                            . '</select>'
                            . '<input type="text" name="novodado">'
                            . '<input type="submit" value="Alterar" name="Alterar"></form>';
                    echo '</td>';
                echo '</tr>';              
            }
        }
        ?>
    </table><br />
    <h3>Novo Endereço</h3>
    <form method="POST" action="GuardaEndereco.php">
        <table width="200" border="3px">
        <tr>
            <td align="right">Descrição:</td>
            <td><input type="text" name="descricao" size="30" maxlength="30"/></td>
        </tr>
        <tr>
            <td align="right">Rua:</td>
            <td><input type="text" name="rua" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Número:</td>
            <td><input type="text" id="num5" data-inputmask="'mask': '9[99999]'" name="numero" size="6"/></td>
        </tr>
        <tr>
            <td align="right">Bairro:</td>
            <td><input type="text" name="bairro" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Complemento:</td>
            <td><input type="text" name="complemento" size="50" maxlength="50"/></td>
        </tr>       
        <tr>
            <td align="right">Cidade:</td>
            <td><input type="text" name="cidade" size="50" maxlength="50"/></td>
        </tr>
        <tr>
            <td align="right">Estado:</td>
            <td>
                <select name="estado">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" size="50" /></td>
        </tr>
        </table>
    </form>
    
</div>
<div style="background-color: #ea8a82; width:30%; height: 100%; text-align: center;">
    PEDIDOS<br />
    <a href="PagClienteFazerPedido.php">Novo Pedido</a><br />
    <br />CONTA<br />
    <a href="PagClienteAlterarDados.php">Alterar Dados Cadastrais</a><br />
    <a href="PagClienteEnderecos.php">Meus endereços</a><br>
    <br /><a href="sairSessao.php">Sair</a>
</div>
<?php 
include "rodape.php";
?>