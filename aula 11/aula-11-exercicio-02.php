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
    <section>
        <form method="GET">
            <?php
                $cont = 1;
                while($cont <= 5){
                    echo "Valor $cont: <input type='number' name='v$cont' value='$cont' min='0' max='100' required=''/><br/>";
                    $cont++;
                }
                $i = 1;
                while($i <= 5){
                    $vir = "num".$i;
                    $url = "v".$i;
                    $$vir = isset($_GET[$url]) ? $_GET[$url] : 10;
                    $i++;
                }
                $i = 1;
                while($i <= 5){
                    $vir = "num".$i;
                    echo "Valor-$i: ".$$vir."<br/>";
                    $i++;
                }
                //echo $num1, $num2, $num3, $num4, $num5;
        ?>
        <input type='submit' value='Enviar'/>
        </form>
    </section>
</body>
</html>