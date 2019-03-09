<?php
$idade = isset($_GET['idade']) ? $_GET['idade'] : "[Não Informado]";

$ano = date("Y") - $idade;

  if($ano >= 18){
    echo "pode votar<br/>";
    echo "pode dirigir";
  }else{
    echo "nao pode votar<br/>";
    echo "nao pode dirigir";
  }
?>