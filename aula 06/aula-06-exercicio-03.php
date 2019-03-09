<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 03 - variaveis referenciadas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a<br/>";
        echo "A variavel B vale $b";
    ?>
</body>
</html>