<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 3</title>
</head>
<body>
    <?php

    /*3) Crie um programa que leia o nome e o salário de um funcionário, mostrando no
        final uma mensagem.
        Ex:
        Nome do Funcionário: Maria do Carmo
        Salário: 1850,45
        O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho. */
        echo   "<div class='forms-results'>";
    
        $nome = "<div class='phppost'>".$_POST['nome']."</div>";
        $salario = "<div class='phppost'>".$_POST['salario']."</div>";
      
        echo "O funcionário $nome tem um salário de $salario em Junho.</br>";
        
        echo "</br><a href='exercicio-03.php'>voltar</a></div>"; 

    ?>
      
    </form>
</body>
</html>








