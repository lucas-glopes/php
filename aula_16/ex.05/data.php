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
          $vet=array(3=>'A',2=>'B',1=>'C',4=>'D',5=>'E');
          print_r($vet);
          ksort($vet);
          print_r($vet);
          krsort($vet);
          print_r($vet);
        ?>
      </pre>
  </div>
</body>
</html>
 