<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
      $cad = array(
      "nome" => "Ana",
      "idade" => "23",
      "peso" => "65,5"

      );

      $cad["fuma"] = true;
     
      foreach ($cad as $campo => $valor){
        echo "o valor de $campo é $valor </br>";
      }
       
       ?>
    </pre>
</div>
</body>
</html>
 