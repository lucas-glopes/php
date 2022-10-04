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
        $num=$_GET['tabu'];
        for($c=1;$c<=10;$c++){
          $res=$num*$c;
          print "$num x $c = $res<br>";
        }
      ?>
      <button><a href="index.html">Voltar</a></button>
  </div>
</body>
</html>
 