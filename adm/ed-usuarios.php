<?php include "../valida.php"; ?>
<?php
  //ed-usuarios.php dentro da pasta ADM
  include "../conexao.php";
  $codigo = $_GET['codigo'];
  $reg = mysql_fetch_array(mysql_query("SELECT * FROM usuarios WHERE codigo='$codigo';"));
  $nome  = $reg[1]; $email = $reg[2];
  $login = $reg[3]; $senha = $reg[4];

echo "<form name='form-editar-usuario' method='post' action='al-usuarios.php?codigo=$codigo'>
<table>
  <tr>
    <td>Nome:</td>
    <td><input name='novo-nome' type='text' maxlength='40' size='40' value='$nome'></td> 
  </tr>  
  <tr>
    <td>Email:</td>
    <td><input name='novo-email' type='email' maxlength='40' size='40' value='$email'></td> 
  </tr>  
  <tr>
    <td>Login:</td>
    <td><input name='novo-login' type='text' maxlength='15' size='15' value='$login'></td> 
  </tr>  
  <tr>
    <td>Senha:</td>
    <td><input name='novo-senha' type='password' maxlength='10' size='40' value='$senha'></td> 
  </tr> 
  <tr>
    <td>&nbsp;</td><td>&nbsp;</td> 
  </tr> 
  <tr>
    <td><input name='bt-limpar' type='reset' value='Limpar'></td>
    <td><input name='bt-ed' type='submit' value='Editar'></td> 
  </tr></table></form>";
  mysql_close($conexao);
?>