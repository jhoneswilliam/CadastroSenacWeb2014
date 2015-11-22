<?php include "../valida.php"; ?>
<?php
//listar-usuarios.php dentro da pasta ADM
  include "../conexao.php";  
  $listar = mysql_query("SELECT * FROM usuarios;");  
  $linhas = mysql_num_rows($listar);  
  echo "<h3 align='center'>Super Listagem de Usuários</h3><hr><table border='1' width='600px'><tr><th>Nome</th><th>E-mail</th>		<th>Login</th><th>Senha</th><th colspan='2'>Ações</th></tr>";
		
	for ($i=1; $i<= $linhas; $i++)
	  {  if ($i%2==0)
	       { $cor = '#ccc';} //IF
	  else
	       { $cor = '#fff';} //ELSE
		  $reg = mysql_fetch_array($listar);	  
		  // separa cada coluna da tabela usuarios em array
		  // reg[0] campo codigo da tb usuarios
		  // reg[1] campo nome da tb usuarios
echo "<tr style='background:$cor;'>
       <td>$reg[1]</td><td>$reg[2]</td>
	   <td>$reg[3]</td><td>$reg[4]</td>
	   <td align='center'><a href='ed-usuarios.php?codigo=$reg[0]'><img src='../imagem/editar.gif'></a></td>
	   <td align='center'><a onclick='return confirm(\"Confirma Excluir?\");' href='ex-usuarios.php?codigo=$reg[0]'><img src='../imagem/excluir.gif'></a></td>
	 </tr>"; 
	   } //FOR repetição	

  echo "<tr>
          <td colspan='5' align='right'>Total de Usuários:</td>
		  <td align='center'><i>$linhas</i></td>
		</tr></table>";
?>