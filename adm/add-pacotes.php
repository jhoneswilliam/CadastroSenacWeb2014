<?php include "../valida.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP</title>
</head>

<body>
<!-- add-pacotes.php dentro de ADM -->
<h3>Add Pacotes</h3><hr>
  <form name="form-add-pacotes" method="post" action="p-pacotes.php">
<table>
  <tr>
    <td>Título:</td>
    <td><input name="c-titulo" type="text" maxlength="150" size="100"></td> 
  </tr>
  
  <tr>
    <td>Descrição:</td>
    <td><textarea name="c-desc" cols="35" rows="6"></textarea></td> 
  </tr>
  
  <tr>
    <td>Data Início:</td>
    <td><input name="c-dti" type="date"></td> 
  </tr>
  
  <tr>
    <td>Data Final:</td>
    <td><input name="c-dtf" type="date"></td> 
  </tr> 
  
  <tr>
    <td>Valor:</td>
    <td>R$<input name="c-valor" type="text" maxlength="10" size="10"><small>formato R$ 999.999,99</small></td> 
  </tr> 
  
  <tr>
    <td>Roteiro:</td>
    <td><textarea name="c-roteiro" cols="35" rows="8"></textarea></td> 
  </tr> 

  <tr>
    <td>Capa:</td>
    <td><input name="c-capa" type="text" maxlength="30" size="20"></td> 
  </tr> 

<tr>
    <td>Visível:</td>
    <td><input type="radio" name="c-ativo" value="s">
      sim<br>
        <input name="c-ativo" type="radio" value="n">
      não</td> 
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