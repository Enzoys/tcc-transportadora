<?php
    include "confere_2.php";
    include ('cabecalho.php')
?>
<title>Listar Empresas</title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body><a href="PagFuncPesquisaCliEmpresa.php">MENU ANTERIOR</a><br><br>
        <div style="text-align: center">
        <?php
            include "conexao.php"; 
            $sql="SELECT * FROM clientesEmpresas";
            if($result=$mysqli->query($sql)){
            /* fetch associative array */
                while($row=$result->fetch_assoc()){
                    echo "Nome da Empresa: ".$row["nome"].
                         " CNPJ: ".$row["cnpj"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_clienteEmpresa"].
                         " Descrição: ".$row["descricao"]."<br/>";
                }
               
            }
            //include "desconectaBanco.php";
        ?>
            </div>
<?php
    include ('rodape.php');
?>
