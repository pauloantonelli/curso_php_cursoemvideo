<?php
  $num = isset($_GET['n1']) ? $_GET['n1'] : "[NÃO INFORMADO]";

  function somar(&$a){
      $a += 2;
      return $a;
  }
  echo somar($num);
?>