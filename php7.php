<?php
    $a = 5;
    $b = 2;
    $c = intdiv($a,$b);
    var_dump($c);
    var_dump($a <=> $b);
    var_dump($b <=> $a);
    var_dump($a <=> $a);

    function divi(int $n):int{
        return $n/2;
    }
    echo "A divisao foi ". divi(5);

    $n = $_GET['numero'] ?? "nenhum";
    echo "o valor digitado foi $n";
?>