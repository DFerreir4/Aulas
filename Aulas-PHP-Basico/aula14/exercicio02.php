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
        
    function soma($a,$b){
        
        return $a + $b;

    }

    $x = 4;
    $y = 4;
    $r = soma($x,$y);
    echo "A soma entre $x e $y é igual a $r ";
   
   

    ?>
</div>
</body>
</html>
 