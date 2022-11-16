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
    <!-- Mostrar ao eleitor se ele é obrigado a votar ou não.  -->
    <?php 
  /*  $ano_nascimento = $_GET["an"];
    $idade = 2022 - $ano_nascimento;
    echo "Quem nasceu $ano_nascimento tem idade de $idade anos";
    $tipoDeVoto = ($idade>=18 && $idade<65) ? "Obrigatorio" : "Não Obrigatorio";
    echo "<br/>E dessa forma seu voto é $tipoDeVoto"; */

    // Quartel
    $ano_nascimento = $_GET["an"];
    $idade = 2022 - $ano_nascimento;
    echo "Sua idade é $idade e você foi " . (($idade>18 && $idade<=20) ? "APROVADO" : "REPROVADO");



  
    
    ?>
    </div>
</body>
</html>