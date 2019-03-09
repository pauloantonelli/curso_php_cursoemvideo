<?php
  $regiao = isset($_GET['escolha']) ? $_GET['escolha'] : 2;

  switch($regiao){
    case 1:
    $regiao = "Você mora na região Norte";
    break;
    case 2:
    $regiao = "Você mora na região Nordeste";
    break;
    case 3:
    $regiao = "Você mora na região Centro-Oeste";
    break;
    case 4:
    $regiao = "Você mora na região Sudeste";
    break;
    case 5:
    $regiao = "Você mora na região Sul";
    break;
    default:
    echo "Ops algo deu errado! Volte e tente novamente<br/><a href='aula-10-exercicio-04.html'>Voltar</a>";
  }
  echo " $regiao<br/>";
?>
<a href="javascript:history.go(-1)">Voltar</a>