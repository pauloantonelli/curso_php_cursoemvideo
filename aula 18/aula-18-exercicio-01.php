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
        <table border="1"><tr>
            <section>
                <?php    
                    $n = array(3,5,8,6);
                    $n[] = 7; 
                    print_r($n);
                    $c = range(5,20,2);
                    print_r($c);
                    foreach($c as $valor){
                        echo "<td>$valor";
                    }
                ?>
            </section>
        </table>
        <section>
            <?php
                $v = array(3 => "A", 1 => "B", 10 => "C", 7 => "D");
                $v[] = "E";
                unset($v[10]);
                print_r($v);

                $pessoa = array("nome" => "Ana",
                                "idade" => 23,
                                "peso" => 78.5
                            );
                $pessoa ["fuma"] = true;
                foreach($pessoa as $elemento => $valor){
                    echo "O valor de $elemento é $valor<br/>";
                }
                $val = array(array(1,2),
                            array(3,4),
                            array(5,6),
                        );
                        $val[1][0] = $val[2][1];
                print_r($val);
            ?>
        </section>
    </pre>
</body>
</html>