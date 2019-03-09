<?php
  $cont = isset($_GET['contador']) ? $_GET['contador'] : 0;
  $limit = isset($_GET['limite']) ? $_GET['limite'] : 0;
  $oper = isset($_GET['cont+']) ? 1 : 0 ;

  if($oper == 1){
    while($cont <= $limit){
      echo "$cont, ";
      $cont++;
    }
  }else{
    while($cont >= $limit){
    echo "$cont, ";
    $cont--;
    }
  }
?>
<hr><a href="javascript:history.go(-1)">Voltar</a>