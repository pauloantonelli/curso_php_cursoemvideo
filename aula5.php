<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aula 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h3>Os valores recebidos foram $n1 e $n2<h3/>";
    echo "A soma vale".($n1 + $n2); 
    echo "<br/>A subtracao vale".($n1 - $n2);
    echo "<br/>A multiplicacao vale".($n1 * $n2);
    echo "<br/>A divisao vale".($n1 / $n2);
    echo "<br/>A modulo vale".($n1 % $n2); 
    ?>
</body>
</html>