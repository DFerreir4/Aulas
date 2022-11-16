<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


/*if($qualASuaIdade < $idadeCrianca){
    echo "criança";

}else{
    echo "Não é criança";
}

*/

if($qualASuaIdade < $idadeCrianca){
    echo "criança";

}elseif($qualASuaIdade < $idadeMaior){
    echo "adolecente";
}elseif($qualASuaIdade < $idadeMelhor){
    echo "adulto";
}else{
    echo "idoso";    
}

echo "<br>";

//operador ternario

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>