<?php
//operador de comparação null coalescing
// ja existia nos bancos de dados e foi passado para o php
// compara se os valores são nulos ou não

$a = null;
$b = null;
$c = 10;

echo $a ?? $b ?? $c;
echo "<br>";
// como funciona?
// no echo deve ser passado por estapas
//exibe para mim $a, se o valor dele for nulo
// mostra para mim $b se o valor for nulo
// mostra para mim $
// foi impresso o valor 10 porque ele é o único que não é nulo



$a = null;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;

// aqui a impressão para de verificar já na variavel $b
//verificou se o $a é nulo, passou para o $b não é nulo, imprime.



?>