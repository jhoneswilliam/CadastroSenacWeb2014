<?php include "../valida.php"; ?>
<?php
//listar-pacotes.php dentro da pasta ADM
  include "../conexao.php";  
  $listar = mysql_query("SELECT * FROM pacotes;");  
  $linhas = mysql_num_rows($listar);  
  echo "<h3 align='center'>Super Listagem de Pacotes</h3><hr><table border='1' width='600px'><tr><th>Código</th><th>Título</th><th>Descrição</th><th>Dt Inicio</th><th>Dt Fim</th><th>Valor</th><th>Roteiro</th><th>Capa</th><th>Ativo</th><th colspan='2'>Ações</th></tr>";
		
	for ($i=1; $i<= $linhas; $i++)
	  {  if ($i%2==0)
	       { $cor = '#ccc';} //IF
	  else
	       { $cor = '#fff';} //ELSE
		  $reg = mysql_fetch_array($listar);	  
echo "<tr style='background:$cor;'>
       <td align='center'>$reg[0]</td><td>$reg[1]</td>
	   <td>$reg[2]</td><td>$reg[3]</td>
	   <td>$reg[4]</td><td>$reg[5]</td>
	   <td>$reg[6]</td><td>$reg[7]</td>
	   <td align='center'>$reg[8]</td>
	   <td align='center'><a href='ed-pacotes.php?codigo=$reg[0]'><img src='../imagem/editar.gif'></a></td>
		<td align='center'>
<a onClick='return confirm(\"Confirma Excluir?\");' href='ex-pacotes.php?codigo=$reg[0]'><img src='../imagem/excluir.gif'></a></td>
	 </tr>"; 
	   } //FOR repetição	

  echo "<tr>
          <td colspan='10' align='right'>Total de Pacotes:</td>
		  <td align='center'><i>$linhas</i></td>
		</tr></table>";
?>