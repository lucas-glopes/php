<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incremento</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $atual = $_GET["ano"];
          echo "O ano atual é". $atual--;
          echo "<br>O ano anterior foi ". $atual++; //pós-incremeto de +1 na var. "atual"
          echo "<br>O ano posterior será ". ++$atual; //pré-incremento de +1 na var. "atual"
      ?>
  </div>
</body>
</html>
 