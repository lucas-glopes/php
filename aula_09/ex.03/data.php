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
        $num=$_GET['num'];
        $c=1;
        do{
          $tab=$num*$c;
          echo"$num x $c = $tab<br>";
          $c++;
        }while($c<=10);
      ?>
  </div>
</body>
</html>
 