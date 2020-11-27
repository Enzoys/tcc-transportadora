<?php
//$mysqli = new mysqli("localhost:3306","root","","bd_invictax");
//$mysqli = new mysqli("sql10.freemysqlhosting.net","sql10377245","vzkv1unqDU","sql10377245");
$mysqli = new mysqli("invicta-x.cerfewlbqd3k.sa-east-1.rds.amazonaws.com", "invicta", "tcc2020ifrj", "dbinvictax");
if (mysqli_connect_errno()) {
    echo "Erro de conexão: " . mysqli_connect_error();
    exit();
} /*else{
    echo "conectado BD...";
}*/
?>