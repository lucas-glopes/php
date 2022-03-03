<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
  <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $dia=$_GET['dia'];
          switch($dia){
            case 1:
            case 7:
              echo 'Não precisa estudar. Pode descansar :-)';
              break;
            default:
              echo 'Precisa estudar. Levanta e vai estudar ;-P';
          }
      ?>
      <button><a href="javascript:history.go(-1)">Voltar</a></button>
  </div>
</body>
</html>
 