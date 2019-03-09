<?php
  $num = isset($_GET['num']) ? $_GET['num'] : "[Numero nao informado]";

  $totMult = array();
  $mult = 0;

  echo "<h1>Analizando o numero $num</h1>";
  echo "<br/><h4>Valores Múltiplos: </h4>";

  for($i = 1; $i <= $num; $i++){//laco para contar os numeros e descobrir o mod das divisoes = mod == 0 é primo;
    $res = $num % $i;
    if($res == 0){
        echo $totMult[$i] = $i.", ";
        $mult ++;
    }
  }
  $contArr = count($totMult);//essa funcao count serve para contar a extensao do array no php(length do js);
  for($i =0; $i <= $contArr;$i++){//laco para varrer e mostrar os dados dos elementos da array;
      echo $contArr[$i];
  }

  echo "<h1>Total de múltiplos: $mult</h1><br/>";
  if($mult == 2){
    echo "<h2>Resultado: $num É PRIMO!</h2>";
  }else{
      echo "<h2>Resultado: $num NÃO É PRIMO!</h2>";
  }
?>
<br/><a href="javascript:history.go(-1)">Voltar</a>