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
        $prod ="leite";
        $pr = 4.5;
      //  echo "o $prod custa R$ $pr";
        printf("O %s custa R$ %.2f ",$prod,$pr);
    ?>
</div>
</body>
</html>
 