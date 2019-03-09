<?php
    $valor = $_POST['valor'];
    echo "O valor recebido foi $valor<br/>";
    $res = sqrt($valor);
    echo "E sua Raiz Quadrada é $res<br/>";
    echo "Arredondando fica ".round($res);
?> 
<hr>
<a href="aula-08-exercicio-01.html">Voltar</a>