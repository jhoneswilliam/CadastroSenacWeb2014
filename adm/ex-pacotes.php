<?php include "../valida.php"; ?>
<?php
//ex-pacotes.php dentro da pasta ADM
  include "../conexao.php";  
  $codigo = $_GET['codigo'];  
  mysql_query("DELETE FROM pacotes WHERE codigo='$codigo'");
  echo "<script type='text/javascript'>
			alert('Pacote Excluído com Sucesso!');
        </script>";
  include "listar-pacotes.php";
  mysql_close($conexao);
?>