<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 5</title>
</head>
<body>
    <?php
        /*9) Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$)
e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.*/

        echo   "<div class='forms-results'>";

                $n1 = $_POST['n1'];
                $tconvertido = $n1 / 3.45 ;

                echo " 
                    O valor que o usuário tem na carteira : R$ $n1.<br>
                    Convertido para Dolar: U$ $tconvertido

                
                ";

            

   
        
        
        
        echo "</br><a href='exercicio-09.php'>voltar</a>"; 

        echo "</div>";


       

    ?>
      
    </form>
</body>
</html>








