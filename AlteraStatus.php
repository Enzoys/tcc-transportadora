<?php
include "Confere_2.php";
include 'conexao.php';

$id = $_POST['id_pedido'];
$verifica = $_POST['verifica'];
$status = $_POST['status'];
$pedido = $_POST['pedido'];

if ($verifica == 'Excluir'){
    $sql2 = "DELETE FROM pedidos WHERE id_pedido ='$id'";
    $mysqli->query($sql2);
    
    $sqlvalor = "SELECT * FROM pedidos WHERE id_pedido = '$id'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido não foi excluído!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido foi excluído!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    }
    
}elseif($verifica =='Alterar'){
    if($status == '1. Em análise'){
    $sql5="UPDATE pedidos SET status_pedido='2. Aprovado' WHERE id_pedido='$id'";
    $mysqli->query($sql5);

    
    $sqlvalor = "SELECT * FROM pedidos WHERE id_pedido = '$id' and status_pedido='2. Aprovado'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido foi para a próxima etapa!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido não foi para a próxima etapa!');window.location.
        href='javascript:window.history.go(-1)'</script>";
    }
    
    }elseif ($status=='2. Aprovado') {
        $sql5="UPDATE pedidos SET status_pedido='3. Em andamento' WHERE id_pedido='$id'";
        $mysqli->query($sql5);
        
        $sqlvalor = "SELECT * FROM pedidos WHERE id_pedido = '$id' and status_pedido='3. Em andamento'";
        $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
        if ($rowcount >= 1) {
        //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
        echo "<script language='javascript' type='text/javascript'>
        alert('O pedido foi para a próxima etapa!');window.location.
        href='javascript:window.history.go(-1)'</script>";
        } else {
        // SENÃO, EXECUTA:
        echo "<script language='javascript' type='text/javascript'>
        alert('O pedido não foi para a próxima etapa!');window.location.
        href='javascript:window.history.go(-1)'</script>";
        }       
        }elseif ($status=='3. Em andamento') {
            $sql5="UPDATE pedidos SET status_pedido='4. Concluído' WHERE id_pedido='$id'";
            $mysqli->query($sql5);
    
            $sqlvalor = "SELECT * FROM pedidos WHERE id_pedido = '$id' and status_pedido='4. Concluído'";
            $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
            if ($rowcount >= 1) {
            //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
            echo "<script language='javascript' type='text/javascript'>
            alert('O pedido foi para a próxima etapa!');window.location.
            href='javascript:window.history.go(-1)'</script>";
            } else {
            // SENÃO, EXECUTA:
            echo "<script language='javascript' type='text/javascript'>
            alert('O pedido não foi para a próxima etapa!');window.location.
            href='javascript:window.history.go(-1)'</script>";
            }       
        }
    
}elseif($verifica == 'Recusar'){
    $sql5="UPDATE pedidos SET status_pedido='5. Recusado' WHERE id_pedido='$id'";
    $mysqli->query($sql5);
    
    $sqlvalor = "SELECT * FROM pedidos WHERE id_pedido = '$id' and status_pedido='5. Recusado'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido foi recusado!');window.history.go(-1);</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido não foi rejeitado!');window.history.go(-1);</script>";
    }
    
    
}elseif($verifica == 'Cancelar'){
    $sql5="UPDATE pedidos SET status_pedido='5. Recusado' WHERE id_pedido='$id'";
    $mysqli->query($sql5);
    
    $sqlvalor = "SELECT * FROM pedidos WHERE id_pedido = '$id' and status_pedido='5. Recusado'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido foi recusado!');window.history.go(-1);</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('O pedido não foi rejeitado!');window.history.go(-1);</script>";
    } 
    
    
}elseif($verifica == 'transporte'){
    if($status=='Previsto'){     
    $sql5="UPDATE viagens SET status_viagem='Transportando' WHERE id_viagem='$id'";
    $mysqli->query($sql5);  
    echo $sql5;
    $sqlvalor = "SELECT * FROM viagens WHERE id_viagem = '$id' and status_viagem='Transportando'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('Status atualizado!');window.history.go(-1);</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('Status não atualizado!');window.history.go(-1);</script>";
    }}elseif($status=='transportando'){
        
        
    $sql5="UPDATE viagens SET status_viagem='Transporte concluído' WHERE id_viagem='$id'";
    $mysqli->query($sql5);  
    echo $sql5;
    $sql6="UPDATE pedidos SET status_pedido='4. Concluído' WHERE id_pedido='$pedido'";
    $mysqli->query($sql6); 
    echo $sql6;
    $sqlvalor = "SELECT * FROM viagens WHERE id_viagem = '$id' and status_viagem='Transporte concluído'";
    $rowcount = mysqli_num_rows($mysqli->query($sqlvalor)); //VERIFICA SE OS DADOS AINDA EXISTEM
    if ($rowcount >= 1) {
    //SE OS DADOS AINDA EXISTIREM NO SISTEMA, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('Status atualizado!');window.history.go(-1);</script>";
    } else {
    // SENÃO, EXECUTA:
    echo "<script language='javascript' type='text/javascript'>
        alert('Status não atualizado!');window.history.go(-1);</script>";
    }
        
    } 
}
?>