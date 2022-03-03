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
        $c=1;
          while($c<=4){
            echo 
            "<form>
              <label for='v$c'>Valor $c</label> <input type='number' name='value' id='v$c' min='0' max='100' value='0'>
            </form>";
            $c++;
          }
      ?>
  </div>
</body>
</html>
 