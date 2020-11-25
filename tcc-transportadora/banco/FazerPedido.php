<?php
    include "banco/confere.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
            include "banco/conexao.php";
            $est_origem = $_POST['estado_origem'];
            $cid_origem = $_POST['cidade_origem'];
            $bairro_origem = $_POST['bairro_origem'];
            $rua_origem = $_POST['rua_origem'];
            $num_origem = $_POST['numero_origem'];
            $comp_origem = $_POST['complemento_origem'];
            $est_destino = $_POST['estado_destino'];
            $cid_destino = $_POST['cidade_destino'];
            $bairro_destino = $_POST['bairro_destino'];
            $rua_destino = $_POST['rua_destino'];
            $num_destino = $_POST['numero_destino'];
            $comp_destino = $_POST['complemento_destino'];
            $status    = $_POST['status'];
            $atest= $_SESSION['usuarioAtest'];           
            
            $result_usuario1 = "SELECT * FROM clientes WHERE cpf = '$atest'";
            $resultado_usuario1 = mysqli_query($mysqli, $result_usuario1);
            $resultado1 = mysqli_fetch_assoc($resultado_usuario1);
            $rowcount1 = mysqli_num_rows($resultado_usuario1);
            if($rowcount1=="1"){
                $nome_cliemp= $resultado1['nome'];
            }
            
            $result_usuario2 = "SELECT * FROM empresas WHERE cnpj = '$atest'";
            $resultado_usuario2 = mysqli_query($mysqli, $result_usuario2);
            $resultado2 = mysqli_fetch_assoc($resultado_usuario2);
            $rowcount2 = mysqli_num_rows($resultado_usuario2);
            if($rowcount2=="1"){
                $nome_cliemp= $resultado2['nome'];
            }
            
            
            $sql = "INSERT INTO pedidos (nome_cliemp, end_origem, end_destino, status, ident_cliemp) " .
            "values('$nome_cliemp', '$est_origem,$cid_origem,$bairro_origem,$rua_origem,"
                    . "$num_origem,$comp_origem', '$est_destino,$cid_destino,$bairro_destino,"
                    . "$rua_destino,$num_destino,$comp_destino','$status', '$atest')";
            echo $sql;
            $mysqli->query($sql);
            if ($mysqli->insert_id == TRUE) { //EXECUTA UMA AÇÃO SE O PROCEDIMENTO
            //TIVER FUNCIONADO
        ?>
        <script type="text/javascript">
            alert("Cadastrado com Sucesso! ");
             //window.location.href='funcionario/form_cadastrar_cliente.php';
        </script>
        <?php
        }
        ?>
    </body>
</html>

