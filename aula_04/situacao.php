<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Situação Escolar</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $nota01=$_GET["a"];
          $nota02=$_GET["b"];
          $med=($nota01+$nota02)/2;
          echo "Sua média é $med<br>";
          $pas=$med>=7?"APROVADO":"REPROVADO"; 
          echo $pas
      ?>
  </div>
</body>
</html>
 