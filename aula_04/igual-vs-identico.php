<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Igual VS Idêntico</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $a = 3;
          $b = "3";
          $res01 = ($a == $b) ? "SIM" : "NÃO";
          echo "Os valores de A e B são iguais? $res01 <br>";
          $res02 = ($a === $b) ? "SIM" : "NÃO";
          echo "Os valores de A e B são idênticos? $res02";
      ?>
  </div>
</body>
</html>
 