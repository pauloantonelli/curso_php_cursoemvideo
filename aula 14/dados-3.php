<?php
    $x = isset($_GET['x']) ? $_GET['x'] : "nao informado";
    $v = [];
    for($i = 1; $i <= $x; $i++){
        $v[] = isset($_GET['valor'.$i]) ? $_GET['valor'.$i] : 0;    
    }
    //print_r($v);
    
    function soma($a = []){
        $somar = 0;
        //$vetorArgs[] = func_get_args();
        //$extVetor = func_num_args();
        $extVetor = count($a);
        //echo "extVetor: $extVetor";
        for($i = 0; $i < $extVetor; $i++){
            $somar = $somar + $a[$i];
        }
        return $somar;
    }

    echo "A soma dos valores é: ".$res = soma($v);

?>
<br/><a href="javascript:history.go(-1)">Voltar</a>