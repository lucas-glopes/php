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
      <?php
      //Contar de 0 a 10 com passo 1
      $c=0;
      do{
        echo $c.' ';
        $c++;
      }while($c>=10);

      //Contar de 10 a 0 com passo 1
      $c=10;
        do{
          echo $c.' ';
          $c--;
        }while($c>=0);
      ?>
  </div>
</body>
</html>
 