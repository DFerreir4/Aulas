<?php

$resultado = (10 + 3) / 2;

echo $resultado;


$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
//inserindo operação de  imprime falso
var_dump($resultado);

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
//inserindo operação de  imprime verdeiro
// ja que uma das condições deu verdadeiro
var_dump($resultado);

?>