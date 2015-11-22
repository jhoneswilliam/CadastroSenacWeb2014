<?php include "../valida.php"; ?>
<?php
  //ed-pacotes.php dentro da pasta ADM
  include "../conexao.php";
  $codigo = $_GET['codigo'];
  $reg = mysql_fetch_array(mysql_query("SELECT * FROM pacotes WHERE codigo='$codigo';"));
  $titulo =  $reg[1]; $descr  =  $reg[2];
  $dti    =  $reg[3]; $dtf    =  $reg[4];
  $valor  =  $reg[5]; $roteiro=  $reg[6];
  $capa	  =  $reg[7]; $ativo  =  $reg[8];
  $s = "unchecked"; $n="unchecked";
  if ($ativo=='s'){$s = 'checked';}
  else {$n = 'checked';}  

echo "<form name='form-ed-pacotes' method='post' action='al-pacotes.php?codigo=$codigo'>
<table>
  <tr>
    <td>Título:</td>
    <td><input name='novo-titulo' type='text' maxlength='150' size='100' value='$titulo'></td> 
  </tr>
  
  <tr>
    <td>Descrição:</td>
    <td><textarea name='novo-desc' cols='35' rows='6'>$descr</textarea></td> 
  </tr>
  
  <tr>
    <td>Data Início:</td>
    <td><input name='novo-dti' type='date' value='$dti'></td> 
  </tr>
  
  <tr>
    <td>Data Final:</td>
    <td><input name='novo-dtf' type='date' value='$dtf'></td> 
  </tr> 
  
  <tr>
    <td>Valor:</td>
    <td>R$<input name='novo-valor' type='text' maxlength='10' size='10' value='$valor'><small>formato R$ 999.999,99</small></td> 
  </tr> 
  
  <tr>
    <td>Roteiro:</td>
    <td><textarea name='novo-roteiro' cols='35' rows='8'>$roteiro</textarea></td> 
  </tr> 

  <tr>
    <td>Capa:</td>
    <td><input name='novo-capa' type='text' maxlength='30' size='20' value='$capa'></td> 
  </tr> 

<tr>
    <td>Visível:</td>
    <td><input type='radio' name='novo-ativo' value='s' $s>
      sim<br>
        <input type='radio' name='novo-ativo' value='n' $n>
      não</td> 
  </tr>  
  <tr>
    <td>&nbsp;</td><td>&nbsp;</td> 
  </tr> 
  <tr>
    <td><input name='bt-limpar' type='reset' value='Limpar'></td>
    <td><input name='bt-add' type='submit' value='Cadastrar'></td> 
  </tr></table></form>";
  mysql_close($conexao);
  //a radio é definida  por checked quando marcada e unchecked quando desmarcada
  // isso pode ser definido <input type='radio' name='novo-ativo' value='n' checked> e pode ser definido por variaveis 
?>