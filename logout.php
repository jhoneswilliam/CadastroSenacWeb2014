<?php
//logout.php dentro da pasta cadastro
  session_start();
  include "conexao.php";
  $linhas = mysql_num_rows(mysql_query("SELECT * FROM logg;"));
  $dtF = date("d/m/Y");
  $hrF = date("H:i:s");
  mysql_query("UPDATE logg SET dtF='$dtF', hrF='$hrF' WHERE codigo ='$linhas';");
  unset($_SESSION['logado']);
  header("Location: index.php");
?> 