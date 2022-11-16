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
        $n1 =isset($_GET["primeiro"])?$_GET["primeiro"]:0;

        $mu = 1;
        do{
           echo "$n1 X $mu = ".($n1*$mu)."</br>";
           $mu = $mu + 1;

        }while($mu <=10);        
       


        ?>
        <br/>

        <a href=javascript:history.go(-1) class="botao"> Voltar</a>
    </div>
</body>
</html>