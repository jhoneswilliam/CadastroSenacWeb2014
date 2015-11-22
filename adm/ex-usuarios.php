<?php include "../valida.php"; ?>
<?php
//ex-usuarios.php dentro da pasta ADM
  include "../conexao.php";  
  $codigo = $_GET['codigo'];  
$linhas=mysql_num_rows(mysql_query("SELECT * FROM usuarios;"));

if($linhas == 1)
{echo "<script type='text/javascript'>
			alert('Não pode excluir último usuário!');
       </script>";}//IF
else
{ mysql_query("DELETE FROM usuarios WHERE codigo='$codigo'");
  echo "<script type='text/javascript'>
			alert('Usuário Excluído com Sucesso!');
        </script>";}//ELSE
		
  include "listar-usuarios.php";
  mysql_close($conexao);
?>