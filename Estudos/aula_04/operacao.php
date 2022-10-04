<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operação</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $tipo = $_GET["op"];
          $n01 = $_GET["a"];
          $n02 = $_GET["b"];
          echo "Os valoes passados foram $n01 e $n02 <br>";
          $res = ($tipo == "s") ? $n01 + $n02 : $n01 * $n02;
          echo "O resultado será $res";
      ?>
  </div>
</body>
</html>
 