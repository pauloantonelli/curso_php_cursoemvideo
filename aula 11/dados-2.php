<?php
  $cont = isset($_GET['contador']) ? $_GET['contador'] : 0;
  $limit = isset($_GET['limite']) ? $_GET['limite'] : 0;
  $incr = isset($_GET['incremento']) ? $_GET['incremento'] : 1;
  
  if($cont < $limit){
    while($cont <= $limit){
      echo "$cont, ";
      $cont = $cont + $incr;
    }
  }else{
    while($cont >= $limit){
      echo "$cont, ";
      $cont = $cont - $incr;
    }
  }
?>
<hr><a href="javascript:history.go(-1)">Voltar</a>