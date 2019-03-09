<?php
  $nome = $_GET['nome'];
  $escolha = $_GET['escolha'];
  
  function funcoes($a, $b){
      if($a == 1){
          $c = strtolower($b);
      }elseif($a == 2){
          $c = strtoupper($b);
      }elseif($a == 3){
          $c =  ucfirst(strtolower($b));
      }elseif($a == 4){
          $c = ucwords(strtolower($b));
      }elseif($a == 5){
          $c = strrev($b);
      }elseif($a == 6){
          $c = strpos($b, "php");/*incrementar com alguma funcao para separar a ultima palavra*/
      }elseif($a == 7){
          $c = stripos($b, "PHP");/*incrementar com alguma funcao para separar a ultima palavra*/
      }elseif($a == 8){
          $c = substr_count($b, "php");
      }elseif($a == 9){
          $c = substr($b, 0, 5);/*incrementar com a opcao de digitar os valores do inicio, e da extensao da funcao*/
      }elseif($a == 10){
          $c = str_pad($b, 30, " ", "STR_PAD_CENTER");/*incrementar com uma opcao para definir o valor, o tipo de separador e o tipo de str_pad*/ 
      }elseif($a == 11){
          $c = str_repeat($b, 5);/*incrementar com opcao para poder definir o numero de repeticoes*/
      }elseif($a == 12){
          $c = str_replace("matematica","php",$b);/*incrementar com duas opcoes, da palavra que vai ser substituida e da que vai substituir*/
      }elseif($a == 13){
          $c = str_ireplace("Matematica", "PHP",$b);/*incrementar com duas opcoes, da palavra que vai ser substituida e da que vai substituir*/
      }
    return $c;
  }

  echo "O valor recebido foi ". funcoes($escolha, $nome);
?>
<br/> 
<a href="javascript:history.go(-1)">Voltar</a>