<?php
//p-login.php dentro da pasta CADASTRO
  session_start();
  include "conexao.php";
  $login = $_POST["c-login"];
  $senha = md5($_POST["c-senha"]);
  $linhas = mysql_num_rows(mysql_query("select * from usuarios 
where login='$login' and senha='$senha';"));
if($linhas == 1)
    {   $dt = date("d/m/Y"); $hr = date("H:i:s");
		$dtF = "0"; $hrF = "0";
		$ip = $_SERVER["REMOTE_ADDR"];
		mysql_query("insert into logg values(0,'$login','$dt','$hr','$dtF','$hrF','$ip');");
		$_SESSION['logado'] = "$login";
	    header("Location: adm/index.php");} //login correto
else
	{	unset($_SESSION['logado']);
	    echo "Login/Senha Incorreto";
		echo "<br><a href='index.php'>voltar</a>";
	}// login incorreto
mysql_close($conexao);
?>