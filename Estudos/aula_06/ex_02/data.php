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
          if($idade>15){
            if($idade>15&&$idade<18||$idade>65){
              $voto="Sim";
              $obrig="Não";
              if($idade>65){
                $dirigir="Sim";
              }else{
                $dirigir="Não";
              }
            }else{
                $voto="Sim";
                $dirigir="Sim";
                $obrig="Sim";
              }
          }else{
            $voto="Não";
            $dirigir="Não";
            $obrig="Não";
          }          
          echo"Ano de Nascimento: $ano<br>";
          echo"Idade: $idade anos<br>";
          echo"Pode votar?: $voto<br>";
          echo"O voto é obrigatório? $obrig<br>";
          echo"Pode dirigir?: $dirigir"
      ?><br>
  </div>
</body>
</html>
 