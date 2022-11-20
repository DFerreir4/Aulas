<?php

$nome = "Diego";

function teste(){
    //escopo
    global $nome; 
    //A palavra reservada global pode chamar variaveis fora do escopo
    echo $nome; 
}

function teste2(){
    $nome = "aninha";
    echo $nome." Agora no teste 2 ";
}


teste();
teste2();

?>