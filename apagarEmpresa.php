<?php
include 'cabecalho.php'; ?>
        <?php
        include "conexao.php";

        $id = $_POST['id'];
        $sql = "delete from empresas where id = $id";
        $mysqli->query($sql); // efetua exclusão

        include 'ListaEmpresa.php';
        ?>
<?php include 'rodape.php'; ?>
