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
        $nome=$_GET["nome"];
        $tam=strlen(trim($nome));
        print "Olá $nome! Seu nome tem $tam letras."
      ?>
  </div>
</body>
</html>
 