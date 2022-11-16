<?php

$frase = "A repetição é a mãe da retenção.";

//tornar dinamico
$palavra = "mãe";


$q = strpos($frase, $palavra);
//função que procura a posição da palavra selecionada.

$texto = substr($frase,0,$q);
//função que seleciona palavras antes de mãe

var_dump($texto);

$texto2 = substr($frase,$q+strlen($palavra),strlen($frase));
//strlen conta as letras
//substr
echo "<br>";

var_dump($texto2);



?>