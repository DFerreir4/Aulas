<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
<?php 

    require_once 'Diskman.php';
    $d = new Diskman;
    $d->marca = "AIWA!";
    $d->cor = "Laranja";
    
    $d->pilha = 2;
    $d->fone = true;
    $d->ligado = true;

    $d->ligando();
  
    print_r($d);
     

?>
</pre>
</body>
</html>