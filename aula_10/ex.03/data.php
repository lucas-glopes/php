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
        $num=$_GET['numero'];
        $mul=0;
        print "<h1>Analisando o número $num...</h1>";
        if($num==0){
          print "<p>O número $num não é primo, pois, um número primo é divisível por ele próprio - e zero não pode ser dividido por zero, já que é uma indeterminação, mas pode ser dividido por vários números naturais. Em resumo, ZERO NÃO É PRIMO.</p>";
        }else{
          print "Valores múltiplos: ";
          for($c=1;$c<=$num;$c++){
            if($num%$c==0){
              print "| ".$c." |";
              $mul+=1;
            }
          }
          print "<br><p>Total de múltiplos: $mul</p>";
          if($mul>2){
            print "<p>O número $num NÃO É PRIMO</p>";
          }else{
            print "<p>O número $num É PRIMO</p>";
          }
        }
      ?>
      <button><a href="index.html">Voltar</a></button>
  </div>
</body>
</html>