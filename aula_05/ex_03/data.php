<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../_css/estilo.css">
  <?php
    $txt=isset($_GET["texto"])?$_GET["texto"]:"Texto não informado";
    $tam=isset($_GET["tamanho"])?$_GET["tamanho"]:"Tamanho não informado";
    $cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";
  ?>
  <style>
    span.texto{
      font-size:<?php echo $tam;?>;
      color:<?php echo $cor;?>;
    }
  </style>
</head>
<body>
  <div>
    <?php
      echo "<span class='texto'>$txt</span>";
    ?>
  </div>
</body>
</html>
 