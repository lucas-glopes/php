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
          $c=1;
          echo 'Progressiva, com passo 1: ';
          while($c<=10){
            if($c<10){
              echo $c.', ';
              $c++;
            }else{
              echo $c.'.';
              $c++;
            }
          }
          $c=10;
          echo '<br>Regressiva, com passo 1: ';
          while($c>=0){
            if($c>0){
              echo $c.', ';
              $c--;
            }else{
              echo $c.'.';
              $c--;
            }
          }
          $c=0;
          echo '<br>Progressiva, com passo 2: ';
          while($c<=10){
            if($c<10){
              echo $c.', ';
              $c+=2;
            }else{
              echo $c.'.';
              $c+=2;
            }
          }
          $c=10;
          echo '<br>Regressiva, com passo 2: ';
          while($c>=0){
            if($c>0){
              echo $c.', ';
              $c--;
            }else{
              echo $c.'.';
              $c--;
            }
          }
      ?>
  </div>
</body>
</html>
 