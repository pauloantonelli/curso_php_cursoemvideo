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
    <fieldset><legend>Tabuada!</legend>
      <form method="GET" action="dados-1.php">
        <select name="tabuada">
          <?php
            for($i = 1; $i <= 10; $i++){
              echo "<option value='$i'>$i x</option>";
            }
          ?>
        </select>
        <input type="submit" value="Calcular"/>
      </fieldset>
    </section>
</body>
</html>