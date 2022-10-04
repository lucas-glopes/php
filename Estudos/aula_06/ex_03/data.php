<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estruturas Condicionais</title>
  <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
  <div>
      <?php
        $nota01=$_GET["nota01"];
        $nota02=$_GET["nota02"];
        $med=($nota01+$nota02)/2;
        if($med>=0&&$med<=5){
          $situ="REPROVADO";
        }elseif($med>=5&&$med<7){
          $situ="RECUPERAÇÃO";
        }else{
          $situ="APROVADO";
        }
        echo"A média entre $nota01 e $nota02 é $med.<br>";
        echo"Situação do aluno: $situ"
      ?>
  </div>
</body>
</html>
 