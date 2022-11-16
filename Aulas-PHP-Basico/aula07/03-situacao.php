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
    <!-- Mostrar a situação do aluno de acordo com a sua média obtida.  -->
    <?php 
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1+$nota2)/2;
    echo "Nota 1 : $nota1";
    echo "<br/> Nota 2 : $nota2";
    echo "<br/> Media do aluno foi $media e o status é ".($situacao = ($media>=7) ? "APROVADO" : "REPROVADO");;

    
   // echo "<br/>Status do aluno : $situacao";
    
  
    
    ?>
    </div>
</body>
</html>