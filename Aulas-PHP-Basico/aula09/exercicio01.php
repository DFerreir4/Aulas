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
        $ano = isset($_GET["anoNascimento"])?$_GET["anoNascimento"]:1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos! <br/>";

        if($idade>=18){
            $v = "Já pode votar";
            $d = "Já pode dirigir";
        }
        else {
            $v ="Não pode votar";
            $d ="Não pode dirigir";
        }

        echo "Com essa idade você $v e também $d";
        ?>
    </div>
</body>
</html>