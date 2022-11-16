<?php

function ola($texto){

return "Olá $texto!<br>";



}

echo ola("Mundo");
echo ola("Diego");
echo ola("joão");

// podese também passar um valor padrão no parametro
//exemplo abaixo

function hello($texto = "World"){

    return "hello $texto<br>";

}

echo hello();
//o valor padrão só imprime se não estiver dado dentro da função
echo hello("lets go");

//vamos fazer um exemplo com dois parametros

function hi($texto = "Planeta", $periodo = "Bom dia!"){
return "Olá $texto e $periodo!<br>";
}

echo hi();
echo hi("mundo");
echo hi("diego","Boa noite");
//caso queria que não traba nenhuma informação basta colocar como o exemplo abaixo
echo hi("",""); // o que foi impresso foi apenas o Olá e e!











?>