<?php include "valida.php"; ?>
<?php
//conecxao.php dentro da pasta cadrastro
 
 $conexao = @mysql_connect("localhost","root","123456") or die("Não foi possivel conerctar! ERRO: ".mysql_error());
 //conectar ao BD mysql servido, login, senha, ou mostrar o die informando um problema
 mysql_select_db("jhones",$conexao);
 //seleciona o banco de dados
 


?>