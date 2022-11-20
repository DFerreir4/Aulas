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
        /*07)Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a
            sua terça parte.
            Ex:
            Digite um número: 3.5
            O dobro de 3.5 é 7.0
            A terça parte de 3.5 é 1.16666*/

        echo   "<div class='forms-results'>";
                     
                $n1 = $_POST['n1'];

                $dobro = $n1 * 2;

                $tercaParte = $n1 / 3;

                echo "O dobro de $n1 é $dobro <br>";
                echo "A terça parte de $n1 é $tercaParte";
            

   
        
        
        
        echo "</br><a href='exercicio-07.php'>voltar</a>"; 

        echo "</div>";


       

    ?>
      
    </form>
</body>
</html>








