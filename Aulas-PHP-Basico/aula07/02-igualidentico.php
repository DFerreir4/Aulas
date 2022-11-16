<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Document</title>
</head>
<body>
<div>
    <!-- PERMITIR QUE O USUÁRIO ESCOLHA ENTRE SOMAR E MULTIPLICAR DOIS NÚMEROS.  -->
    <?php 
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM" : "NÃO";
    echo "As variaveis A e B são iguais? $r";
    $re = ($a === $b) ? "SIM" : "NÃO";
    echo "<br/>As variaveis A e B são identicas? $re";
  
    
    ?>
    </div>
</body>
</html>