<?php
    include "banco/confere_2.php";
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Listar Empresas</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body><a href="http://localhost/tcc1/funcionario/pagEmpresa.php">MENU ANTERIOR</a>
        
        <?php
            include "banco/conexao.php"; 
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
            include "banco/desconecta.php";
        ?>
<?php
    include ('index/rodape.php');
?>
