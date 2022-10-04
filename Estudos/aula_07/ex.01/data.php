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
          $num=$_GET['numero'];
          $ope=$_GET['ope'];
          switch($ope){
            case 1:
              $res=$num*2;
              echo "O dobro de $num é $res.";
              break;
            case 2:
              $res=$num**3;
              echo "O cubo de $num é $res.";
              break;
            case 3:
              $res=sqrt($num);
              echo "A raís quadrada de $num é $res.";
              break;  
            default:
              echo "Desculpe, houve algum erro no servidor e sua solicitação não conseguiu ser processada. Aguarde, em breve nosso servidor voltará ao normal.";          
          }
      ?>
      <button><a href="index.html">Voltar</a></button>
  </div>
</body>
</html>
 