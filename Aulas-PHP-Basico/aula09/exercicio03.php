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
        $n1 = isset($_GET["n1"])?$_GET["n1"]:"A primeira nota não foi digitada";
        $n2 = isset($_GET["n2"])?$_GET["n2"]:"A segunda nota não foi digitada";
        $m = ($n1+$n2)/2;
        
        echo "A média entre ".number_format($n1,1). " e ". number_format($n2,1). " é igual a ". number_format($m,1) . "!<br/>" ;

        if($m < 5){
            $sitAluno = "REPROVADO!";
        }
        else{

            if($m >=5 && $m < 7){
                $sitAluno = "RECUPERAÇÃO!";
            }
            elseif($m  >= 7){
                $sitAluno = "APROVADO!";
            }
        
        }
        echo "Situação do aluno: $sitAluno";
        ?>
        <br/>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>