<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado!";
    $sobrenome = isset($_GET["sobrenome"])?$_GET["sobrenome"]:"Sobrenome não informado!";
    $idade = isset($_GET["idade"])?$_GET["idade"]:"idade não informada!";

    echo " Bom dia , $nome $sobrenome! A sua idade é: $idade";

        if ($idade >= 16 && $idade <= 18) {
   
        $faixaE = "O status de restrição é média!";
        }

  
   else{
        if($idade <= 15){
            $faixaE = "O status de restrição é alto!";
        }
        else{
            $faixaE= "O status de restrição é baixo!";
        }
   
    }

    echo "<br/>O status de $nome na locadora está: ".$faixaE;
?>
    
</body>
</html>