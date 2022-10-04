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
        function soma(){
          $num=func_get_args();
          $t=func_num_args();
          $sum=0;
          for($c=0;$c<$t;$c++){
            $sum+=$num[$c];
          }
          return $sum;
        }

        $res=soma(3,7,8,2);
        print "A soma dos valores é $res"
      ?>
  </div>
</body>
</html>
 