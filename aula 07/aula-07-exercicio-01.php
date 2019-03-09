<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 01 - operador ternario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $numero1 = $_GET['x'];
        $numero2 = $_GET["y"];
        $tipo = $_GET['op'];
        $resultado = $tipo == "s" ? $numero1 + $numero2 : $numero1 * $numero2;
        $operacao = $tipo == "s" ? "soma" : "multiplicação";
        echo "A $operacao entre $numero1 e $numero2 é $resultado";
    ?>
</body>
</html>