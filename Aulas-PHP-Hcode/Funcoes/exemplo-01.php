<?php

function ola(){
    echo "ola mundo!<br>";
}

ola();
ola();
// aqui não chega a ser uma função e sim uma sub-rotina
// a função tem que retornar o valor dela. como o exemplo abaixo

function hello(){
    return "hello world!!<br>";
}

//não vai ser que nem a rotina e imprimir colocando apenas a função
//deve-se colocar o echo antes. Segue o exemplo abaixo.

echo hello();

//foi impresso: hello world!!

//exemplo com variavel

$frase = hello();

echo strlen($frase);
//a função interna do php estava dando problemas na na impressão do exemplo da sub-rotina
//imprimiu apenas com a função propriamente dita

?>