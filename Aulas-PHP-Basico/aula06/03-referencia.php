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
    <!-- VAMOS PRATICAR O USO DE VARIAVEIS REFERENCIADAS  -->
    <?php 
    /* a variavel B se torna referencia de A. No momento que é colocado o & na variavel, 
    o que está sendo recebido na variavel B será o mesmo valor de A*/
    $a = 3;
    $b = &$a; // aqui B vai ter a mesma referencia de A ou seja, os dois tem o mesmo valor 3
    $b += 5; /* quando B passa a ter valor, esse valor vai ser o mesmode A referente a B. Como aqui está somando mais 5
então B vai ser 8 e A ao invés de ser 3, passa a ser 8 também.*/
    echo "</br> A variavel B vale $a";
    echo "</br> A variavel B vale $b";
    
    ?>
    </div>
</body>
</html>