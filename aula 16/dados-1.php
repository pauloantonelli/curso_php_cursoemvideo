<?php
    $p = "Leite";
    $pr = 4.5;
    //echo "O $p custa R$".number_format($pr,2);
    //printf ("o %s custa R$ %.2f", $p, $pr);

    "<hr/>";
    $x[0] = 1;
    $x[1] = 2;
    $x[2] = 3;
    //print_r($x);

    "<hr/>";
    $txt = "Este é um exemplo de uma string digitada que pode ser que seja talvez super gigantescamente grande em que...";
    $res = wordwrap($txt, 5, "<br>\n");
    //echo $res;

    "<hr/>";
    $txt = "Curso em Video!";
    $tam = strlen($txt);
    //echo $tam;

    "<hr/>";
    /*$nome = "   Jose da Silva   ";
    echo(strlen($nome));
    $novo = trim($nome);
    echo $novo;
    echo(strlen($novo));*/

    "<hr/>";
    $frase = "Eu estou estudando php";
    $cont = str_word_count($frase, 0);
    //echo $cont;

    "<hr/>";
    $site = "Curso em video";
    $vetor = explode(" ", $site);
    //print_r($vetor);

    "<hr/>";
    $nome = "Paulo Ricardo";
    $vetor = str_split($nome);
    print_r($vetor);
?> 