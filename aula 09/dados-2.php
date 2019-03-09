<?php
$idade = isset($_GET['idade']) ? $_GET['idade'] : "[Não Informado]";

$ano = date("Y") - $idade;

  if($ano <= 15){
    echo "nao pode votar<br/>";
  }elseif(($ano >= 16 && $ano < 18) || ($ano >65)){
      echo "votar é opcional<br/>";
  }else{
      echo "pode voltar";
    }
?>