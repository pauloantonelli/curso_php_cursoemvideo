<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 05 - operadores logicos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $nasc = $_GET['an'];
        $idade = 2018 - $nasc;
        echo "Quem nasceu em $nasc tem $idade anos<br/>";
        $voto = $idade < 18 || $idade > 65 ? "Nao Obrigatorio" : "É obrigatorio";
        echo "Seu voto $voto";
    ?>
</body>
</html>