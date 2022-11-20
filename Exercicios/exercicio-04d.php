<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 4</title>
</head>
<body>
    <?php
        /*4) Desenvolva um algoritmo que leia dois números inteiros e mostre o somatório
            entre eles.
            Ex:
            Digite um valor: 8
            Digite outro valor: 5
            A soma entre 8 e 5 é igual a 13. */

        echo   "<div class='forms-results'>

                    <div class='phppost'>";
                        $n1 = $_POST['n1'];
                    echo "</div>

                    <div class='phppost'>";
                         $n2 = $_POST['n2'];
                    echo "</div>";

        $total = $n1 + $n2;
        
        echo "A soma entre $n1 e $n2 é igual a $total </br>";
        
        echo "</br><a href='exercicio-04.php'>voltar</a></div>"; 


       

    ?>
      
    </form>
</body>
</html>








