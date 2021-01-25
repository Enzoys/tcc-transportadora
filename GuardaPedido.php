<?php
include "Confere_1.php";
include "conexao.php";
$cliente = $_SESSION['usuarioId'];
$endorigem = $_POST['endorigem'];
$enddestino = $_POST['enddestino'];
$descricao = $_POST['descricao'];
date_default_timezone_set('America/Sao_Paulo');
$data = date("Y-m-d");
$hora = date("H:i");
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$estado2 = $_POST['estado2'];
$cidade2 = $_POST['cidade2'];
$bairro2 = $_POST['bairro2'];
$endereco2 = $_POST['endereco2'];
$numero2 = $_POST['numero2'];
$complemento2 = $_POST['complemento2'];

if ($descricao == ""){
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";  
} else {
    if ($endorigem==""){
        if($estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" ||
    $complemento == ""){
           echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";  
        }else{
            $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','$cliente');";
            $mysqli->query($sql1);
            $idCriado = $mysqli->insert_id;           
            if($enddestino==""){
                if($estado2 == "" || $cidade2 == "" || $bairro2 == "" || $endereco2 == "" || $numero2 == "" || $complemento2 == ""){
                echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
            }else{
                    $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2','9999999999');";
                    $mysqli->query($sql2);
                    $idCriado2 = $mysqli->insert_id;
                    
                    $sql3 = "INSERT INTO pedidos (id_cliente, descricao_pedido, id_enderecoOrigem, id_enderecoDestino, status_pedido, data_pedido, hora_pedido) "
                    . "values('$cliente','$descricao','$idCriado','$idCriado2','1. Em análise','$data','$hora');";
                    $mysqli->query($sql3);
                    $idCriado3 = $mysqli->insert_id;
                    $sql = "SELECT * FROM pedidos WHERE id_pedido = '$idCriado3'";    
                    $rowcount = mysqli_num_rows($mysqli->query($sql));
                    if ($rowcount == 1) {
                        echo "<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso!\\nA Invicta-X entrará em contato para confirmação.');window.location.href='javascript:window.history.go(-0)'</script>";
                        } elseif ($rowcount == 0) {
                        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o pedido.');window.location.href='javascript:window.history.go(-0)'</script>";
                        }                
            }
            
        }else{
            $sqlenddestino = "select * from enderecoscad where descEnd='$enddestino'";
            if ($result = $mysqli->query($sqlenddestino)) {
            while ($row = $result->fetch_assoc()) {
            $estado2 = $row['estado'];
            $cidade2 = $row['cidade'];
            $bairro2 = $row['bairro'];
            $endereco2 = $row['endereco'];
            $numero2 = $row['numero'];
            $complemento2 = $row['complemento'];}  
            $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2','9999999999');";
            $mysqli->query($sql2);
            $idCriado2 = $mysqli->insert_id;
            
            $sql3 = "INSERT INTO pedidos (id_cliente, descricao_pedido, id_enderecoOrigem, id_enderecoDestino, status_pedido, data_pedido, hora_pedido) "
            . "values('$cliente','$descricao','$idCriado','$idCriado2','1. Em análise','$data','$hora');";
            $mysqli->query($sql3);
            $idCriado3 = $mysqli->insert_id;
            $sql = "SELECT * FROM pedidos WHERE id_pedido = '$idCriado3'";    
            $rowcount = mysqli_num_rows($mysqli->query($sql));
            if ($rowcount == 1) {
            echo "<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso!\\nA Invicta-X entrará em contato para confirmação.');window.location.href='javascript:window.history.go(-0)'</script>";
            } elseif ($rowcount == 0) {
            echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o pedido.');window.location.href='javascript:window.history.go(-0)'</script>";
            } 
            
        }
            
        }
    }}else{
    $sqlendorigem = "select * from enderecoscad where descEnd='$endorigem'";
    if ($result = $mysqli->query($sqlendorigem)) {
        while ($row2 = $result->fetch_assoc()) {
            $estado = $row2['estado'];
            $cidade = $row2['cidade'];
            $bairro = $row2['bairro'];
            $endereco = $row2['endereco'];
            $numero = $row2['numero'];
            $complemento = $row2['complemento'];
    
    $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','$cliente');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
    echo $idCriado;
        if($enddestino==""){
            if($estado2 == "" || $cidade2 == "" || $bairro2 == "" || $endereco2 == "" || $numero2 == "" || $complemento2 == ""){
                echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
            }else{
                $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2','9999999999');";
                    $mysqli->query($sql2);
                    $idCriado2 = $mysqli->insert_id;
                    
                    $sql3 = "INSERT INTO pedidos (id_cliente, descricao_pedido, id_enderecoOrigem, id_enderecoDestino, status_pedido, data_pedido, hora_pedido) "
                    . "values('$cliente','$descricao','$idCriado','$idCriado2','1. Em análise','$data','$hora');";
                    $mysqli->query($sql3);
                    $idCriado3 = $mysqli->insert_id;
                    $sql = "SELECT * FROM pedidos WHERE id_pedido = '$idCriado3'";    
                    $rowcount = mysqli_num_rows($mysqli->query($sql));
                    if ($rowcount == 1) {
                        echo "<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso!\\nA Invicta-X entrará em contato para confirmação.');window.location.href='javascript:window.history.go(-0)'</script>";
                        } elseif ($rowcount == 0) {
                        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o pedido.');window.location.href='javascript:window.history.go(-0)'</script>";
                        } 
                
            }
            
        }else{
            $sqlenddestino = "select * from enderecoscad where descEnd='$enddestino'";
            if ($result = $mysqli->query($sqlenddestino)) {
            while ($row = $result->fetch_assoc()) {
            $estado2 = $row['estado'];
            $cidade2 = $row['cidade'];
            $bairro2 = $row['bairro'];
            $endereco2 = $row['endereco'];
            $numero2 = $row['numero'];
            $complemento2 = $row['complemento'];}  
            $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2','$cliente');";
            $mysqli->query($sql2);
            $idCriado2 = $mysqli->insert_id;
            echo $idCriado2;
            
            $sql3 = "INSERT INTO pedidos (id_cliente, descricao_pedido, id_enderecoOrigem, id_enderecoDestino, status_pedido, data_pedido, hora_pedido) "
            . "values('$cliente','$descricao','$idCriado','$idCriado2','1. Em análise','$data','$hora');";
            $mysqli->query($sql3);
            $idCriado3 = $mysqli->insert_id;
            echo $idCriado3;
            $sql = "SELECT * FROM pedidos WHERE id_pedido = '$idCriado3'";    
            $rowcount = mysqli_num_rows($mysqli->query($sql));
            if ($rowcount == 1) {
            echo "<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso!\\nA Invicta-X entrará em contato para confirmação.');window.location.href='javascript:window.history.go(-0)'</script>";
            } elseif ($rowcount == 0) {
            echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o pedido.');window.location.href='javascript:window.history.go(-0)'</script>";
            } 
            
        }
        }
            
        }
        
    }
    }}
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
/*   
}  
if ($estado == "" || $cidade == "" || $bairro == "" || $endereco == "" || $numero == "" ||
    $complemento == ""){
    if($endorigem==""){
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
    } elseif ($estado2 == "" || $cidade2 == "" || $bairro2 == "" || $endereco2 == "" || $numero2 == "" || $complemento2 == ""){
    if($enddestino==""){
    echo "<script language='javascript' type='text/javascript'>" . "alert('Atenção aos campos que devem ser preenchidos.');" . "window.location.href='javascript:window.history.go(-1)'</script>";
} else{
    
if(!$endorigem=="") {
    $sqlendorigem = "select * from enderecos where descEnd='$endorigem'";
    if ($result = $mysqli->query($sqlendorigem)) {
        while ($row2 = $result->fetch_assoc()) {
            $estado = $row2['estado'];
            $cidade = $row2['cidade'];
            $bairro = $row2['bairro'];
            $endereco = $row2['endereco'];
            $numero = $row2['numero'];
            $complemento = $row2['complemento'];
    
    $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','9999999');";
    $mysqli->query($sql1);
    echo $sql1;
$idCriado = $mysqli->insert_id;
echo $idCriado;
        }}else{
    $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
 }

if(!$enddestino=="") {
    $sqlenddestino = "select * from enderecos where descEnd='$enddestino'";
    if ($result = $mysqli->query($sqlenddestino)) {
        while ($row = $result->fetch_assoc()) {
            $estado2 = $row['estado'];
            $cidade2 = $row['cidade'];
            $bairro2 = $row['bairro'];
            $endereco2 = $row['endereco'];
            $numero2 = $row['numero'];
            $complemento2 = $row['complemento'];}  
    $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2','9999999999');";
    $mysqli->query($sql2);
    echo $sql2;
$idCriado2 = $mysqli->insert_id;
//echo $idCriado2;
        }} else {
    $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2');";
    $mysqli->query($sql2);
    $idCriado2 = $mysqli->insert_id;
}

    $sql3 = "INSERT INTO pedidos (id_cliente, descricao_pedido, id_enderecoOrigem, id_enderecoDestino, status_pedido, data_pedido, hora_pedido) "
            . "values('$cliente','$descricao','$idCriado','$idCriado2','Em análise','$data','$hora');";
    $mysqli->query($sql3);
    echo $sql3;
    $idCriado3 = $mysqli->insert_id;
    $sql = "SELECT * FROM pedidos WHERE id_pedido = '$idCriado3'";    
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso!\\nA Invicta-X entrará em contato para confirmação.');window.location.href='javascript:window.history.go(-2)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o pedido.');window.location.href='javascript:window.history.go(-0)'</script>";
}}}}
if(!$endorigem=="") {
    $sqlendorigem = "select * from enderecos where descEnd='$endorigem'";
    if ($result = $mysqli->query($sqlendorigem)) {
        while ($row2 = $result->fetch_assoc()) {
            $estado = $row2['estado'];
            $cidade = $row2['cidade'];
            $bairro = $row2['bairro'];
            $endereco = $row2['endereco'];
            $numero = $row2['numero'];
            $complemento = $row2['complemento'];
    
    $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento','9999999');";
    $mysqli->query($sql1);
    echo $sql1;
$idCriado = $mysqli->insert_id;
echo $idCriado;
        }}else{
    $sql1 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento) values('$estado','$cidade','$bairro','$endereco','$numero','$complemento');";
    $mysqli->query($sql1);
    $idCriado = $mysqli->insert_id;
 }

if(!$enddestino=="") {
    $sqlenddestino = "select * from enderecos where descEnd='$enddestino'";
    if ($result = $mysqli->query($sqlenddestino)) {
        while ($row = $result->fetch_assoc()) {
            $estado2 = $row['estado'];
            $cidade2 = $row['cidade'];
            $bairro2 = $row['bairro'];
            $endereco2 = $row['endereco'];
            $numero2 = $row['numero'];
            $complemento2 = $row['complemento'];}  
    $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento, id_usuario) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2','9999999999');";
    $mysqli->query($sql2);
    echo $sql2;
$idCriado2 = $mysqli->insert_id;
//echo $idCriado2;
        }} else {
    $sql2 = "INSERT INTO enderecos (estado, cidade, bairro, endereco, numero, complemento) values('$estado2','$cidade2','$bairro2','$endereco2','$numero2','$complemento2');";
    $mysqli->query($sql2);
    $idCriado2 = $mysqli->insert_id;
}

    $sql3 = "INSERT INTO pedidos (id_cliente, descricao_pedido, id_enderecoOrigem, id_enderecoDestino, status_pedido, data_pedido, hora_pedido) "
            . "values('$cliente','$descricao','$idCriado','$idCriado2','Em análise','$data','$hora');";
    $mysqli->query($sql3);
    echo $sql3;
    $idCriado3 = $mysqli->insert_id;
    $sql = "SELECT * FROM pedidos WHERE id_pedido = '$idCriado3'";    
    $rowcount = mysqli_num_rows($mysqli->query($sql));
    if ($rowcount == 1) {
        echo "<script language='javascript' type='text/javascript'>alert('Pedido registrado com sucesso!\\nA Invicta-X entrará em contato para confirmação.');window.location.href='javascript:window.history.go(-0)'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Não foi possível registrar o pedido.');window.location.href='javascript:window.history.go(-0)'</script>";
}

}}*/
