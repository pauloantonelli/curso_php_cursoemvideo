<?php
$nota1 = isset($_GET['nota1']) ? $_GET['nota1'] : "[Não Informado]";
$nota2 = isset($_GET['nota2']) ? $_GET['nota2'] : "[Não informado]";

$media = ($nota1 + $nota2) / 2;

  if($media < 5){
    $situacao = "Reprovado";
  }elseif($media >= 5 && $media <= 7){
      $situacao = "Em Recuperação";
  }elseif($media > 7){
      $situacao = "Aprovado";
  }else{
    $situacao = "Nota fora do padrao";
  }
  echo "O aluno com 1ª nota $nota1 e 2ª nota $nota2 esta com media $media e a situacao é $situacao."
?>