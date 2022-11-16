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
        $v =isset($_GET["val"])?$_GET["val"]:1;
        echo "<h2>Calculando o valor fatorial de $v!</h2>";

        $c = $v;
        $fat = 1;
        do{
           $fat = $fat*$c;
            $c = $c - 1;
        } while($c >= 1);

        echo "<h3> $v ! = $fat</h3>";
  
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>

        <br/>


    </div>
</body>
</html>