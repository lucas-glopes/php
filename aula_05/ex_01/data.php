<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
  <div>
      <?php
        $valor=$_GET["valor"];
        $sq=sqrt($valor);
        echo"A Raiz de $valor é igual a ".number_format($sq,2);
      ?>
      <a href="index.html">Voltar</a>
  </div>
</body>
</html>
 