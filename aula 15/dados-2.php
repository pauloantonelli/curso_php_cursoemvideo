<?php
  $num = isset($_GET['n1']) ? $_GET['n1'] : 0;

  include "funcoes.php";
  require "funcoes.php";
  include_once "funcoes.php";
  require_once "funcoes.php";
  echo "<h1>Testando novas funções</h1>";
  ola();

  mostraValor($num);
?>
<br><a href="javascript:history.go(-1)";