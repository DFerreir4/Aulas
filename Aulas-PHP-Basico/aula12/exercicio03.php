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
        <form  method="get" action="exercicio03_.php">
            número: <select name="primeiro" id="">
                <?php
                $n1 = 1;
                do{
                    echo "<option value='$n1'>$n1</option>";
                    $n1 = $n1 + 1;
                } while ($n1 <= 10);
                ?>
        </select>
            <input type="submit" name="calcular" id="" class="botao"/>
    </form>
      
    </div>
</body>
</html>
