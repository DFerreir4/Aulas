<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="_css/estilo.css" />
    <title>Document</title>
</head>
<body>
    <div>
     <?php 
     $valor = $_GET["v"];
    $rq = sqrt($valor);

     echo "O valor enviado foi $valor é igual a ". number_format($rq,2);
     ?>
    <br/>
    <a href="01-exercicio.php">Voltar</a>
    </div>
    
</body>
</html>