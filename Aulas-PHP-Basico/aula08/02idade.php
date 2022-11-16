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
$nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]";
$ano = isset($_GET["ano"])?$_GET["ano"]:0;
$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[SEM SEXO]";
$idade = date("Y") - $ano;
echo "$nome $sexo e tem $idade anos";


?>
<br/>
<a href="02-exercicio.html">Voltar</a>
    </div>
    
</body>
</html>