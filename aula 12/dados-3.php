<?php
  $tab = isset($_GET['tab']) ? $_GET['tab'] : ["Tabuada nao informada"];
  $cont = 1;
  echo "<h2>Mostrando a tabuada de $tab</h2>";
  do{
    $res = $tab * $cont;
    echo "$tab x $cont = $res<br/>";
    $cont++;
  }while($cont <= 10);
?>
<hr><a href="javascript:history.go(-1)">Voltar</a>