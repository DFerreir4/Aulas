<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>

    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        $e = isset($_GET["est"])?$_GET["est"]:0;

        switch ($e){

            case 2 :
            case 5 :
            case 9 :
            case 14:
            case 16:
            case 17:
            case 20:
            case 19:
            case 26:

                echo "Você mora na  <span class='foco'>REGIÃO NORDESTE!</span><br/>"; 
                break;
            case 1:
            case 4:
            case 22:
            case 23:
            case 27:
            case 3:
            case 13:

                echo "Você mora na <span class='foco'>REGIÃO NORTE!</span> <br/>";
                break;

            case 6:
            case 8:
            case 10:
            case 11:
          
                
                echo "Você mora na <span class='foco'>REGIÃO CENTRO-OESTE!</span><br/>";
                break;

            case 21:
            case 24:
            case 15:  
            
                echo "Você mora na  <span class='foco'>REGIÃO SUL!</span><br/>";
                break;

            case 7:
            case 18:
            case 25:
            case 12: 
          

            echo "Você mora na  <span class='foco'>REGIÃO SUDESTE!</span><br/>";
            break;
            




        }

        ?>
        
        <a href = javascript:history.go(-1) class="botao">Voltar</a>
  

    </div>
</body>
</html>