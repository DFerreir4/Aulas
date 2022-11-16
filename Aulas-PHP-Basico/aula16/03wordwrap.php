<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $t ="aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da função wordwrap";
      $r = wordwrap($t,20,"</br>\n");
      echo $r;
    ?>
</div>
</body>
</html>
 ,