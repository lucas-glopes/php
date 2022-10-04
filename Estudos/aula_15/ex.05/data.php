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
          $info=array('nome'=>'Lucas','idade'=>16,'peso'=>74);

          foreach($info as $key=>$data){
            print 'O campo "'.$key.'" possui o conteúdo "'.$data.'"<br>';
          }
        ?>
  </div>
</body>
</html>