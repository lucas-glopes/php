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
        $n=$_GET['valor'];
        if($n==0||$n==1){
          $fat=1;
        }else{
          $c=$n;
          $fat=1;
          do{
            $fat*=$c;
            $c--;
          }while($c>=1);
        }
        echo "$n! = $fat";
      ?>
  </div>
</body>
</html>
 