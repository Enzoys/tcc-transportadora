<?php
   include "conexao.php";
   $nomemp     = $_POST['nomemp'];
   $cnpj    = $_POST['cnpj'];
   $telefone    = $_POST['telefone'];
   $email   = $_POST['email'];
   $rua   = $_POST['rua'];
   $bairro   = $_POST['bairro'];
   $estado   = $_POST['estado'];
   $complemento   = $_POST['complemento'];
   $cep   = $_POST['cep'];
   $cidade   = $_POST['cidade'];
   $numero   = $_POST['numero'];
   $desc   = $_POST['desc'];
   $sql = "INSERT INTO empresas(nome, cnpj, telefone, email, descricao)".
   " values('$nomemp', '$cnpj', '$telefone','$email','$desc');"
           . "INSERT INTO endereco_emp (rua, bairro, estado, complemento, cep, cnpj_cli, cidade,numero)"
           . "values('$rua', '$bairro', '$estado', '$complemento', '$cep','$cnpj','$cidade','$numero');";

   echo $sql;
   $mysqli->query($sql);  // efetua o cadastro
   if ($mysqli->insert_id == TRUE) {
?>
<script type="text/javascript">
   alert("Cadastrado com Sucesso! ");
</script>
<?php
}
       include "./ListaEmpresa.php";
?>