<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            //$mysqli = new mysqli("localhost:3306","root","","bd_invictax");
            $mysqli = new mysqli("remotemysql.com","e6BT0JclTD","JO2gszMDtJ","e6BT0JclTD"); 
            /*check connection*/
            if (mysqli_connect_errno()){
                echo("Erro de conexão: ".mysqli_connect_error());
                exit();
            }/*else{
                echo "conectado BD...";
            }*/
        ?>
    </body>
</html>
