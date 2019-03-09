<?php
  $dia = isset($_GET['dia']) ? $_GET['dia'] : 2;

  switch($dia){
    case 2:
    $dia = "Você não tem aula por que hoje é Segunda-feira!";
    break;
    case 3:
    $dia = "Você tem aula por que hoje é Terça-feira!";
    break;
    case 4:
    $dia = "Você tem aula por que hoje é Quarta-feira!";
    break;
    case 5:
    $dia = "Você tem aula por que hoje é Quinta-feira!";
    break;
    case 6:
    $dia = "Você tem aula por que hoje é Sexta-feira!";
    break;
    case 7:
    $dia = "Você tem aula por que hoje é Sábado!";
    break;
    case 8:
    $dia = "Você não tem aula por que hoje é Domingo!";
    break;
    default:
    echo "Dia da semana invalido!";
  }
  echo " $dia<br/>";
?>
<a href="javascript:history.go(-1)">Voltar</a>