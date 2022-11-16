<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v =array (
            2 =>"A", 5=>"J",0=>"M",3=>"X",4=>"K"

        );
        
        print_r($v);
        
       // array_push($v,"O"); insere um  elemento no final do vetor
      //  array_pop($v); deleta o elemento no final do vetor
    //    array_unshift($v,"O"); insere um elemento no inicio do vetor
  //  array_shift($v); deleta o elemento no inicio do vetor
      //  sort($v); ordenar elementos de forma crescente
    //  rsort($v); ordenar elementos de forma decrescente
   // asort($v); ordena os elementos junto com os índices (elementos crecentes) os índices mantem associativos
  // arsort($v);ordena os elementos junto com os índices (elementos decrecentes) os índices mantem associativos
   // ksort($v); ornadena índices de forma crescentes
  // krsort($v); ordena índices de forma decrescente
  
  print_r($v);
  

  $a=10;
  $b=2;
  $j=$a/2;
  for ($i=0;$i<$j;$i++){
      if ($i % $b == 1) 
      echo "$i";
  }
    ?>
    </pre>
</div>
</body>
</html>
 