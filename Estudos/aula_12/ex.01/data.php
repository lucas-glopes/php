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
        function teste(&$x){
          $x+=2;
          print "<p>O valor de 'x' é $x</p>";
        }

        $a=3;
        teste($a);
        print "<p>O valor de 'a' é $a</p>";
      ?>
  </div>
</body>
</html>
 