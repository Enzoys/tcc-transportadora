<?php
    include "confere_2.php";
?>
<?php
    include ('cabecalho.php')
?>
<title>Listar Clientes</title>
        <a href="PagFuncPesquisaCliPessoa.php">MENU ANTERIOR</a><br><br>
        <div style="text-align: center">
        
        <?php
            //LINK PARA A PAGINA QUE CONECTA AO BANCO
            include "conexao.php";
            //CODIGO SELECT TABELA CLIENTES
            $sql="SELECT * FROM clientesPessoas";
            //SE RECEBER RESULTADO DA QUERY, ENTRA NA ARRAY ASSOCIATIVA 
            //ENQUANTO HOUVER RESULTADOS E LISTA OS CLIENTES
            if($result=$mysqli->query($sql)){
                while($row=$result->fetch_assoc()){
                    echo "Nome do cliente: ".$row["nome"].
                         " CPF: ".$row["cpf"].
                         " Telefone: ".$row["telefone"].
                         " Email: ".$row["email"].
                         " ID: ".$row["id_clientePessoa"]."<br/>";                        
                }
               
            }
        ?>
        </div>
<?php
    include ('rodape.php');
?>