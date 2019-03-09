<?php
  $n1 = isset($_GET['n1']) ? $_GET['n1'] : "[Não Informado]";
  $n2 = isset($_GET['n2']) ? $_GET['n2'] : "[Não Informado]";

  function somar($a, $b){
    $res = $a + $b;
    return $res;
  }

  $res = somar($n1,$n2);
  echo "a soma entre $n1 e $n2 é $res";
?>
<br/><a href="javascript:history.go(-1)">Voltar <-</a> 