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
    <?php
    echo "<form method='GET'>
        <label for='x'>Quantos numeros?</label>
        <input type='number' name='x' min='2' required=''/>
        <input type='submit' value='Inserir'/>
    <hr>
    </form>";
    
    echo "<fieldset><legend>Rotina com multiplos Parametros</legend>";
    $x = isset($_GET['x']) ? $_GET['x'] : 2;
    for($i = 1; $i <= $x; $i++){
        echo "<form method='GET' action='dados-3.php'>
        <label for='$i'> Valor $i</label>
        <input type='number' name='valor$i' min='1' required=''/>";
    }
    echo "<input type='number' name='x' value='$x' readonly/>";
    echo "<input type='submit' value='Somar'/>
    </form>
    </fieldset>";
    ?>
</body>
</html>