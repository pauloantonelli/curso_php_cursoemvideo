<?php
  $nome = isset($_POST["nome"])? $_POST['nome'] : "[nome nao informado]";
  $ano = isset($_POST["nascimento"])? $_POST['nascimento'] : "[ano do nascimento nao informado]";
  $sexo = isset($_POST["sexo"])? $_POST['sexo'] : "[sexo nao informado]";
  $idade = date("Y") - isset($ano)? $ano : "0000";
  $dia = date("Y");
  echo "$nome do sexo $sexo que nasceu em $ano, agora em $dia tem $idade anos.";
?>
<hr>
<a href="aula-08-exercicio-02.html">Voltar</a> 