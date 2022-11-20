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
        /*5) Faça um programa que leia as duas notas de um aluno em uma matéria e mostre
            na tela a sua média na disciplina.
            Ex:
            Nota 1: 4.5
            Nota 2: 8.5
            A média entre 4.5 e 8.5 é igual a 6.5. */

        echo   "<div class='forms-results'>";
                        $materia = $_POST['materia'];
                        $n1 = $_POST['n1'];
                        $n2 = $_POST['n2'];

               

        $total = $n1 + $n2;
        
        echo "A média da <strong>$materia</strong> entre 
        <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$total</strong> </br>";
        
        echo "</br><a href='exercicio-05.php'>voltar</a>"; 

        echo "</div>";


       

    ?>
      
    </form>
</body>
</html>








