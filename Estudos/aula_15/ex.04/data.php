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
          $v=array(0=>2,2=>4,4=>6,6=>8,8=>10);
          unset($v[8]);
          print_r($v);
        ?>
      </pre>
  </div>
</body>
</html>
 