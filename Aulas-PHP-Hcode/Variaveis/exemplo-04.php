<?php

$nome = (int)$_GET["a"];
$n2 = (int)$_GET["b"];

//(int) é uma conversão de string para inteiro. SUPERGLOBAIS
//$_GET é uma variavel global que está imprimindo o valor que está no link
// ex: http://localhost/udemy/exemplo-04.php?a=2 | O var_dump vai imprimir o valor 2
//ex2: http://localhost/udemy/exemplo-04.php?a=2&b=456 | var_dump n2

var_dump($nome);
var_dump($n2);

//pegar o IP do usuário. O ip do provedor de acesso do usuário

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

// pegar o nome do arquivo

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;




?>