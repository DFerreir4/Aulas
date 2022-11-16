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

        if($idade < 16){
            $tipoVoto = "Não vota";
        }
        elseif(($idade >=16 && $idade < 18) || ($idade > 65)){
                $tipoVoto = "Voto Opcional";
            }
            else{
                $tipoVoto = "Voto Obrigatorio";
            }
        

        echo "Para essa idade, $tipoVoto";
        ?>
    </div>
</body>
</html>