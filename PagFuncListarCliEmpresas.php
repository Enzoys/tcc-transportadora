<?php
    include "confere_2.php";
    include ('cabecalho.php')
?>
<title>Listar Empresas</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body><a href="http://localhost/tcc1/pagEmpresa.php">MENU ANTERIOR</a>
        
        <?php
            include "conexao.php"; 
            $sql="SELECT * FROM empresas";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome da Empresa: ".$row["nome"].
                         " CNPJ: ".$row["cnpj"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_emp"].
                         " Descrição: ".$row["descricao"]."<br/>";
                }
               
            }
            include "desconecta.php";
        ?>
<?php
    include ('rodape.php');
?>
