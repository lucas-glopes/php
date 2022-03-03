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
          $ano=isset($_GET["ano"])?$_GET["ano"]:1980;
          $idade=date("Y")-$ano;
          if($idade>=16){
            $voto="Sim";
            $dirigir="Sim";
          }else{
            $voto="Não";
            $dirigir="Não";
          }
          echo"Ano de Nascimento: $ano<br>";
          echo"Idade: $idade anos<br>";
          echo"Pode votar?: $voto<br>";
          echo"Pode dirigir?: $dirigir"
      ?><br>
      <a href="index.html">Voltar</a>
  </div>
</body>
</html>
 