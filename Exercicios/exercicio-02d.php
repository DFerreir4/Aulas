<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 2</title>
</head>
<body>
    <?php
        
        /*2) Faça um programa que leia o nome de uma pessoa e mostre uma mensagem de boasvindas para ela:
        Ex:
        Qual é o seu nome? João da Silva
        Olá João da Silva, é um prazer te conhecer!*/

        echo   "<div class='forms-results'>";
    
        $nome = "<div class='phppost'>".$_POST['nome']."</div>";
        echo "Olá $nome, é um prazer te conhecer!</br>";
        
        echo "</br><a href='exercicio-02.php'>voltar</a></div>"; 

    ?>
      
    </form>
</body>
</html>








