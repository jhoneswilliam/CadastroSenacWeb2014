<?php include "../valida.php"; ?>
<?php
  //al-usuarios.php dentro da pasta ADM
  include "../conexao.php";
  $codigo = $_GET["codigo"];
  $nome   = $_POST["novo-nome"];
  $email  = $_POST["novo-email"];
  $login  = $_POST["novo-login"];
  $senha  = md5($_POST["novo-senha"]);
mysql_query("UPDATE usuarios SET nome='$nome', email='$email', login='$login', senha='$senha' WHERE codigo='$codigo';");
  include "listar-usuarios.php";  
  mysql_close($conexao);
?>