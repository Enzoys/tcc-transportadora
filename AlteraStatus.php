<?php
include "confere_2.php";
include 'conexao.php';

$id = $_POST['id_pedido'];
$verifica = $_POST['verifica'];
$status = $_POST['status'];

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
    
}elseif($verifica == 'add'){
    
    
}
?>