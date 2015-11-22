<?php
  //valida.php dentro da pasta CADASTRO
  @session_start();
  if(!isset($_SESSION['logado']))
  { header("Location: ../index.php"); }
?>