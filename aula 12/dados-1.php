<?php
  $de = isset($_GET['de']) ? $_GET['de'] : 0;
  $ate = isset($_GET['ate']) ? $_GET['ate'] : 0;
  $pulo = isset($_GET['pulo']) ? $_GET['pulo'] : 1;

  if($de < $ate){
    do{
        echo $de.", ";
        $de += $pulo;
    }while($de <= $ate);
    }else{
        do{
            echo $de.", ";
            $de -= $pulo;
        }while($de >= $ate);
    }
?>
<hr><a href="javascript:history.go(-1)">Voltar</a>