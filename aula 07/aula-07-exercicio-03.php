<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 03 - comparacao de nota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $med = ($nota1 + $nota2)/2;
        $res = $med < 6 ? "Reprovado" : "Aprovado";
        echo "As notas do aluno foram $nota1 e $nota2, o aluno está $res";
    ?>
</body>
</html>