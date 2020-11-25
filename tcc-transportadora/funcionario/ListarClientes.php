<?php
    include "banco/confere_2.php";
?>
<?php
    include ('index/cabecalho.php')
?>
<title>Listar Clientes</title>
        <a href="http://localhost/tcc1/funcionario/pagCliente.php">MENU ANTERIOR</a><br><br>
        <div style="text-align: center">
        
        <?php
            //LINK PARA A PAGINA QUE CONECTA AO BANCO
            include "banco/conexao.php";
            //CODIGO SELECT TABELA CLIENTES
            $sql="SELECT * FROM clientes";
            //SE RECEBER RESULTADO DA QUERY, ENTRA NA ARRAY ASSOCIATIVA 
            //ENQUANTO HOUVER RESULTADOS E LISTA OS CLIENTES
            if($result=$mysqli->query($sql)){
                while($row=$result->fetch_assoc()){
                    echo "Nome do cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_cli"]."<br/>";                        
                }
               
            }
            //LINK PARA A PAGINA QUE ENCERRA CONEXÃO
            include "banco/desconecta.php";
        ?>
        </div>
<?php
    include ('index/rodape.php');
?>