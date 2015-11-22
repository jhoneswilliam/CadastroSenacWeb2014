<?php include "../valida.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP</title>
</head>

<body>
<!-- index.php dentro da pasta ADM -->
<table width="90%" border="1">
  <tr>
    <td align="center" bgcolor="#000">
       <h4 style="color:#FFF">Area ADM</h4></td>
    <td align="center"><img src="" width="468" height="60"></td>
  </tr>
  
<tr>
  <td valign="top">
    <table width="100%" border="1"><!-- INICIO tabela MENU -->
      <tr><td><a href="home.php" target="conteudo">Home</a></td></tr>        
      <tr><td><b>ADD</b></td></tr>
	  <tr><td align="right"><a href="add-usuarios.php" target="conteudo">Usuários</a></td></tr>
      <tr><td align="right"><a href="add-pacotes.php" target="conteudo">Pacotes</a></td></tr>

      <tr><td>&nbsp;</td></tr>
      
      <tr><td><b>LISTAR</b></td></tr>
	  <tr><td align="right"><a href="listar-usuarios.php" target="conteudo">Usuários</a></td></tr>
      <tr><td align="right"><a href="listar-pacotes.php" target="conteudo">Pacotes</a></td></tr>
      
      <tr><td>&nbsp;</td></tr>
      <tr><td align="right"><a href="../logout.php">Logout</a></td></tr>      
    </table><!-- FIM tabela MENU -->    
 </td>
<td><iframe name="conteudo" frameborder="0" scrolling="auto" src="home.php" width="100%" height="750"></iframe></td>  
  </tr>
  
  <tr>
    <td align="center" colspan="2">Super Área ADM Tabajara 2014 - Todos os Direitos Reservados</td>  
  </tr>
</table>
</body>
</html>











