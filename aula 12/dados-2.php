<?php
  $inteiro = isset($_GET['inteiro']) ? $_GET['inteiro'] : 0;
    $cont= $inteiro;
    $fat = 1;
  do{
    $fat = $fat * $cont;  
    echo $fat.", ";
      
    $cont--;
  }while($cont >= 1);
  echo "<h1>O fatorial de $inteiro é: $fat</h1>";
?>
<hr><a href="javascript:history.go(-1)">Voltar</a>