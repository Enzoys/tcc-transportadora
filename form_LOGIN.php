<?php
session_start();// INICIA SESSAO
?>
<html>
<head>
<title> Login de Usuário </title>
</head>
<body>
<form method="POST" action="login.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="escolha.php">Cadastre-se</a>
</form>
        <p>
            <?php // SE HOUVER ERRO, MOSTRA A VARIAVEL GLOBAL	
		if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
        </p>
        <p>
            <?php // QUANDO DESLOGAR, MOSTRA A VARIAVEL GLOBAL
                if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
</body>
</html>