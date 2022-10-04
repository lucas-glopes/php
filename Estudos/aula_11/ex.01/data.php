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
        function soma($a,$b){
          $s=$a+$b;
          print "<p>A soma vale $s<p>";
        }

        soma(3,2);
        soma(8,2);
        $x=7;
        $y=8;
        soma($x,$y)
      ?>
  </div>
</body>
</html>
 