<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $n1 = $_GET["a"];
          $n2 = $_GET["b"];
          echo "<h2>Valores recebidos: $n1 e $n2</h2>";
          echo "A soma entre $n1 e $n2 vale ". ($n1 + $n2). "<br>";
          echo "A subtração entre $n1 e $n2 vale ". ($n1 - $n2). "<br>";
          echo "A multiplicação de $n1 por $n2 vale ". ($n1 * $n2). "<br>";
          echo "A divisão de $n1 por $n2 vale ". ($n1 / $n2). "<br>";
          echo "O resto da divisão de $n1 por $n2 vale ". ($n1 % $n2). "<br>";
          echo "A média entre $n1 e $n2 vale ". (($n1 + $n2) / 2);
      ?>
</body>
</html>