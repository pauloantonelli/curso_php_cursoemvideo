<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 02 - comparacao iqual e identico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $numero1 = 3;
        $numero2 = "3";
        $res = $numero1 == $numero2 ? "Sim" : "Não";
        var_dump($numero1)."e".var_dump($numero2);
        echo ": esses valores são iquais? $res<br/>";

        var_dump($numero1)."e".var_dump($numero2);
        $res = $numero1 === $numero2 ? "Sim" : "Não";
        echo ": esses valores sao identicos? $res";
    ?>
</body>
</html>