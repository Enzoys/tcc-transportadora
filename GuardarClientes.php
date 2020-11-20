<?php
   include "conexao.php";
   $nome     = $_POST['nome'];
   $cpf      = $_POST['cpf'];
   $telefone    = $_POST['telefone'];
   $email   = $_POST['email'];
   $rua   = $_POST['rua'];
   $bairro   = $_POST['bairro'];
   $estado   = $_POST['estado'];
   $complemento   = $_POST['complemento'];
   $cep   = $_POST['cep'];
   $cidade   = $_POST['cidade'];
   $numero   = $_POST['numero'];
   $sql ="INSERT INTO clientes (nome, cpf, telefone, email) "
   . "values('$nome', '$cpf', '$telefone','$email');";
   $sql2 ="INSERT INTO endereco_cli (numero, rua, bairro, estado, complemento, cep, cpf_cli, cidade)"
   . "values('$numero', '$rua', '$bairro', '$estado', '$complemento', '$cep','$cpf','$cidade');";

   echo $sql,$sql2;
   $mysqli->query($sql);// efetua o cadastro
   $mysqli->query($sql2);// efetua o cadastro do endereco
   if ($mysqli->insert_id == TRUE) {
?>
<script type="text/javascript">
   alert("Cadastrado com Sucesso! ");
</script>
<?php
}
       include "./ListarClientes.php";
?>