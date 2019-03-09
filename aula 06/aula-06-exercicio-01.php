<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercicio 01 - operadores de atribuicao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ $preco<br/>";
        $desc = $preco * 10/100;
        echo "O desconto foi de R$ $desc<br/>";
        $preco -= $desc;
        echo "Voce terá que pagar somente R$".number_format($preco,2,",",".");
    ?>
</body>
</html>