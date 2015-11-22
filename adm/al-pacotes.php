<?php include "../valida.php"; ?>
<?php 
  //al-pacotes.php dentro da pasta ADM
  include "../conexao.php";
  $codigo   = $_GET["codigo"];
  $titulo	= $_POST['novo-titulo'];
  $descr  	= $_POST['novo-desc'];
  $dti		= $_POST['novo-dti'];
  $dtf	  	= $_POST['novo-dtf'];
  $valor	= $_POST['novo-valor'];
  $roteiro	= $_POST['novo-roteiro'];
  $capa		= "imagem/pacote1.jpg"; //$_POST['novo-capa'];
  $ativo	= $_POST['novo-ativo'];  
mysql_query("UPDATE pacotes SET titulo='$titulo', descr='$descr', dti='$dti', dtf='$dtf', valor='$valor', roteiro='$roteiro', capa='$capa', ativo='$ativo' WHERE codigo='$codigo';");
  include "listar-pacotes.php";  
  mysql_close($conexao);
?>