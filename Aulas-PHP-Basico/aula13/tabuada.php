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
    $n1 = isset($_GET["num"])?$_GET["num"]:1;

    for($c=1;$c<=10;$c+=1){
        $r = $n1*$c;
        echo "$n1 X $c = $r </br>";        

    }

    ?>
    </br>
   <a href=javascript:history.go(-1) class="botao">Voltar</a> 

</div>
</body>
</html>
 