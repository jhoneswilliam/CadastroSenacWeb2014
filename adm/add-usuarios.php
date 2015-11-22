<?php include "../valida.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP</title>
</head>

<body>
<!-- add-usuario.php dentro de ADM -->
<h3>Add Usuários</h3><hr>
  <form name="form-add-usuario" method="post" action="p-usuarios.php">
<table>
  <tr>
    <td>Nome:</td>
    <td><input name="c-nome" type="text" maxlength="40" size="40"></td> 
  </tr>
  
  <tr>
    <td>Email:</td>
    <td><input name="c-email" type="email" maxlength="40" size="40"></td> 
  </tr>
  
  <tr>
    <td>Login:</td>
    <td><input name="c-login" type="text" maxlength="10" size="15"></td> 
  </tr>
  
  <tr>
    <td>Senha:</td>
    <td><input name="c-senha" type="password" maxlength="10" size="15"></td> 
  </tr> 
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
  </tr> 
  <tr>
    <td><input name="bt-limpar" type="reset" value="Limpar"></td>
    <td><input name="bt-add" type="submit" value="Cadastrar"></td> 
  </tr>   
  </table>  
  </form>
</body>
</html>