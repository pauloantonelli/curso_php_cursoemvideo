<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>funcoes aritmeticas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $valor1 = $_GET['x'];
        $valor2 = $_GET['y'];
        echo "<h3>Os valores recebidos foram $valor1 e $valor2<h3/>";
        echo "O valor absoluto de $valor2 é ". abs($valor2);
        echo "<br/>A potenciacao de $valor1<sup>$valor2<sup/> é ". pow($valor1, $valor2);
        echo "<br/>A raiz quadrada de $valor1 é ". sqrt($valor1);
        echo "<br/>O valor arredondado de $valor2 é". round($valor2); 
        echo "<br/>A parte inteira de $valor2 é". intval($valor2);
        echo "<br/>O valor de $valor2 em moeda é R$". number_format($valor2, 2, ",", ".");
    ?>
</body>
</html>