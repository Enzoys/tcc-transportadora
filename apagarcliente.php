<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "conexao.php";

         $id  = $_POST['id'];
         $sql = "delete from clientes where id = $id";
         $mysqli->query($sql);  // efetua exclusão

         include 'ListarClientes.php';  
        ?>

    </body>
</html>
