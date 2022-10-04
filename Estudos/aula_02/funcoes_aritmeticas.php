<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <style>
      h2 {
          font-size: 15pt;
      }
  </style>
</head>
<body>
  <div>
      <?php
          $v1 = $_GET["x"];
          $v2 = $_GET["y"];
          echo "<h2>Valores recebidos: $v1 e $v2</h2>";
          echo "O valor absoluto de $v2 é ". abs($v2). "<br>";
          echo "O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2). "<br>";
          echo "A raiz quadrada de $v1 é ". sqrt($v1). "<br>";
          echo "O valor arrendondado da divisão entre $v1 e $v2 é ". round($v1 / $v2);
          echo "<br> A parte inteira da divisão entre $v1 e $v2 é ". intval($v1 / $v2);
          echo "<br> O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".")
      ?>
</body>
</html>