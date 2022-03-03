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
        for($c=1;$c<=10;$c++){
          echo $c." ";
        }
        echo "<br>";
        for($c=10;$c>=1;$c--){
          echo $c." ";
        }
        echo "<br>";
        for($c=0;$c<=50;$c+=5){
          echo $c." ";
        }
        echo "<br>";
        for($c=30;$c>=10;$c-=2){
          echo $c." ";
        }
      ?>
  </div>
</body>
</html>
 