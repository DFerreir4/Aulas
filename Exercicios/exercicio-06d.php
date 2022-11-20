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
        /*6) Faça um programa que leia um número inteiro e mostre o seu antecessor e seu
            sucessor.
            Ex:
            Digite um número: 9
            O antecessor de 9 é 8
            O sucessor de 9 é 10*/

        echo   "<div class='forms-results'>";
                     
                    
                $n1 = $_POST['n1']; 
                
               $ant = $n1 - 1;
               $suc = $n1 + 1;
        
               echo "O antecessor de $n1 é $ant <br>";
               echo "O sucessor de $n1 é $suc";



               

   
        
        
        
        echo "</br><a href='exercicio-06.php'>voltar</a>"; 

        echo "</div>";


       

    ?>
      
    </form>
</body>
</html>








