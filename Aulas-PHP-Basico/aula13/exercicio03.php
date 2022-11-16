<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
     <?php 
     $n1 = isset($_GET["n1"])?$_GET["n1"]:1;
     echo "<h2>Analisando o número $n1...</h2>";
     echo "<h3>Valores múltiplos: </h3>";
     $mult = 0;
     for ($c = 1; $c <= $n1; $c++) {
          if ($n1 % $c == 0) {
              $mult++;
              echo "$c ";
          }
          
        
     }
     echo "<p> Total de multiplos: $mult </p>";
		echo "<h2> Resultado: $n1 <span class='foco'>";
		if ($mult <= 2) {
			echo " É PRIMO! ";
		} else {
			echo " NÃO É PRIMO! ";
		}
		 echo "</span></h2>";
     
     ?>
     </br>
     <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
    
</body>
</html>