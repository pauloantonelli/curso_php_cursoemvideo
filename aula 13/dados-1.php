<?php
  $tab = isset($_GET['tabuada']) ? $_GET['tabuada'] : 1;

  for($i = 1; $i <= 10; $i++){
      echo "$tab x $i = ".$tab*$i."<br/>";
  }
?>
<hr><a href="javascript:history.go(-1)">Voltar</a>