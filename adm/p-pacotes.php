<?php include "../valida.php"; ?>
<?php
//p-pacotes.php dentro da pasta ADM
  include "../conexao.php";
  $titulo	= $_POST['c-titulo'];
  $descr  	= $_POST['c-desc'];
  $dti		= $_POST['c-dti'];
  $dtf	  	= $_POST['c-dtf'];
  $valor	= $_POST['c-valor'];
  $roteiro	= $_POST['c-roteiro'];
  $capa		= "imagem/pacote1.jpg"; //$_POST['c-capa'];
  $ativo	= $_POST['c-ativo'];

if ((empty($titulo)) or (empty($descr)) or (empty($valor)) or (empty($roteiro)))
{ echo "<script type='text/javascript'>
			alert('Preencha todos os campos!');
        </script>";}//FIM IF
	else		
{mysql_query("INSERT INTO pacotes VALUES(0,'$titulo','$descr','$dti','$dtf','$valor','$roteiro','$capa','$ativo');");
  echo "Cadastro realizado com sucesso!<br><a href='listar-pacotes.php'>Listar Pacotes</a>";
}//FIM ELSE
mysql_close($conexao); //fecha a conexao com o BD
?>