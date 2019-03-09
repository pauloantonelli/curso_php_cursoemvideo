<?php
  $numero = isset($_GET['numero']) ? $_GET['numero'] : 0;
  $operacao = isset($_GET['oper']) ? $_GET['oper'] : 1;

  switch($operacao){
    case 1:
    $operacao = $numero * 2;
    break;

    case 2:
    $operacao = $numero ^ 3;
    break;

    case 3:
    $operacao = sqrt($numero); // $numero ^ (0.5); - $numero ^ (1/2);
    break;
  }
  echo "Resultado $operacao <br/>";
  echo "<a href='aula-10-exercicio-01.html'>Voltar</a>"
?>