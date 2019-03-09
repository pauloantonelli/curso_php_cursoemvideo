<?php
  $dia = isset($_GET['dia']) ? $_GET['dia'] : 1;

  switch($dia){
    case 1:
    $dia = "Você não tem aula por que hoje é Domingo!";
    break;
    case 2:
    $dia = "Você tem aula por que hoje é Segunda-feira!";
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
    $dia = "Você não tem aula por que hoje é Sábado!";
  }
  echo "$dia<br/>";
?>
<a href="javascript:history.go(-1)">Voltar</a>