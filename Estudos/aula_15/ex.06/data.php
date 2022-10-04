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
          $matriz=array(array(1,2),array(3,4),array(5,6));
          $matriz[1][1]=10;
          print_r($matriz)
        ?>
      </pre>
  </div>
</body>
</html>
 