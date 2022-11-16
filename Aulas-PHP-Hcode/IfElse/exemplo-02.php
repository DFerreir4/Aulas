<?php


$meuSalario = 15001;

$salarioMinimo = 1100;
$salarioMedio = 5000;
$salarioAlto = 15000;


if($meuSalario <= $salarioMinimo){
    echo "Meu salario é um salario Mínimo. Recebo R$ $meuSalario ";
}elseif($meuSalario <= $salarioMedio){
    echo "Meu salario é um salario Médio. Recebo R$ $meuSalario";
}elseif($meuSalario <= $salarioAlto){
    echo "Meu salario é um salario Alto. Recebo R$ $meuSalario";
}else{
    echo "Sou rico!!! Eu ganho mais que o alto. Meu salário é esse R$ $meuSalario";
}






?>