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
        /*8) Desenvolva um programa que leia uma distância em metros e mostre os valores
            relativos em outras medidas.
            Ex:
            Digite uma distância em metros: 185.72
            A distância de 85.7m corresponde a:
            0.18572Km
            1.8572Hm
            18.572Dam
            1857.2dm
            18572.0cm
            185720.0mm*/

        echo   "<div class='forms-results'>";

                $n1 = $_POST['n1'];
                $km = $n1 /1000;
                $hm = $n1 /100  ;
                $dam = $n1 /10  ;
                $dm = $n1 *10;
                $cm = $n1 *100;
                $mm = $n1 *1000;

                echo "
                    A distância de $n1 corresponde a: <br>
                    $km Km<br>
                    $hm Hm<br>
                    $dam Dam<br>
                    $dm dm<br>
                    $cm cm<br>
                    $mm mm";

            

   
        
        
        
        echo "</br><a href='exercicio-08.php'>voltar</a>"; 

        echo "</div>";


       

    ?>
      
    </form>
</body>
</html>








