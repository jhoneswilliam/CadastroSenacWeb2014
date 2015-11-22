<?php include "../valida.php"; ?>
<?php
 //p-usuarios.php dentro da pasta ADM
 // arquivo responsavel por pegar os dados
 // do formulario add-usuarios e cadastrar
 // no banco de dados
 include "../conexao.php"; //inclue(abre) o arquivo
 $nome  = $_POST['c-nome'];
 $email = $_POST['c-email'];
 $login = $_POST['c-login'];
 $senha = md5($_POST['c-senha']);
 
if ((empty($nome)) or (empty($email)) or (empty($login)) or (empty($senha)))
{ echo "<script type='text/javascript'>
			alert('Preencha todos os campos!');
        </script>";}//FIM IF
else
{ mysql_query("INSERT INTO usuarios VALUES(
0,'$nome','$email','$login','$senha');");
  echo "Cadastro realizado com sucesso!<br><a href='listar-usuarios.php'>Listar Usuários</a>";
}//FIM ELSE
mysql_close($conexao); //fecha a conexao com o BD
?>








