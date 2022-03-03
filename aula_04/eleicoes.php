<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pode ou Não Votar</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
          $ano=$_GET["ano"];
          $idade=2021-$ano;
          echo"Sua idade é $idade anos<br>";
          $voto=$idade>=18&&$idade<65?"VOTO OBRIGATÓRIO":"VOTO NÃO OBRIGATÓRIO";
          echo$voto;
      ?>
  </div>
</body>
</html>
 