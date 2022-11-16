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
    <!-- EXERCÍCIO 01 - APLICAR 10% DE DESCONTO AO PREÇO DE UM PRODUTO -->
    <?php 
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ". number_format($preco,2);
    $preco += ($preco*10/100);
    echo "</br> E o novo preço de 10% de desconto sera R$ ". number_format($preco,2);
    
    ?>
    </div>
</body>
</html>