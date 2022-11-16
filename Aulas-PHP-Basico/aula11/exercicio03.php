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
 <?php
    $inicio = isset($_GET["i"])?$_GET["i"]:"[NENHUM NÚMERO DIGITADO NO INCIO]";
    $final = isset($_GET["f"])?$_GET["f"]:"[NENHUM NÚMERO DIGITADO NO FINAL]";
    $incremento = isset($_GET["in"])?$_GET["in"]:0;

 
   if($inicio <= $final) {
      while($inicio <= $final){
        echo "$inicio </br>";
    $inicio = $inicio + $incremento;
    }
  }

   elseif($inicio >= $final){
    echo "O campo Início não pode ser maior que o campo Final!";
   }

?>
   
       
      
<a href=javascript:history.go(-1) class="botao">Voltar</a>
    </div>
</body>
</html>