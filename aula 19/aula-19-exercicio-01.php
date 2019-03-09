<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <pre>
        <?php
            $n = array("A", "J", "M", "X", "K");
            print_r($n);
            echo count($n)."<br/>";

            /*pilha*/
            $n[] = 8;
            array_push($n, 12);
            array_push($n, 78.5);
            var_dump($n);
            array_pop($n);
            var_dump($n);
            
            /*fila*/
            array_unshift($n, "Paulo");
            array_unshift($n, 7);
            var_dump($n);
            array_shift($n);
            var_dump($n);
             
            /*ordenacao de vetores*/
            sort($n);
            print_r($n);
            rsort($n); 
            print_r($n);
            asort($n);
            print_r($n);
            arsort($n);
            print_r($n);

            $j = array(2=>"A",5=> "J",0=> "M",3=> "X",4=> "K");
            ksort($j);
            print_r($j);
            krsort($j);
            print_r($j);

        ?>
    </pre>
</body>
</html>