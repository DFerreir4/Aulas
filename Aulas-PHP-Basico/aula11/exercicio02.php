<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>

    <title>Document</title>
</head>
<body>
    <div>
  <form method="get" action="exercicio02.php">
    <?php


$i = 1;
while($i <= 5 ){
    $v ="num".$i;
    $url= "v".$i;
    $$v=isset($_GET[$url])?$_GET[$url] :0;
    $i++;

}

echo "$num1 $num2 $num3 $num4 $num5";

/*  $i = 1;
while($i <= ){

} */
   
       

    
?>
<input type="submit" value="Enviar" class="botao">

  </form>
       


    </div>
</body>
</html>