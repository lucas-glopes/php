<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
  <div>
      <pre>
        <?php
          $vet=array('A','B','C','D','E');
          print_r($vet);
          // array_unshift($vet,'L');
          array_shift($vet);
          print_r($vet);
        ?>
      </pre>
  </div>
</body>
</html>
 