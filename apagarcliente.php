<?php
include 'cabecalho.php'; ?>
        <?php
        include "conexao.php";

        $id = $_POST['id'];
        $sql = "delete from clientes where id = $id";
        $mysqli->query($sql); // efetua exclusão - Editado por Marcos e Enzo

        include 'ListarClientes.php';
        ?>
<?php include 'rodape.php'; ?>
