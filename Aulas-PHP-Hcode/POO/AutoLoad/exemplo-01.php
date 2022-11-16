<?php

function incluirClasses($nomeClasse){
//função criada para ligar as classes da mesma pasta
    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasses");


//require_once ("Delrei.php");
//require_once("Automovel.php");
$carro = new DelRei();
$carro->acelerar(80);

//está dando erro na impressão porque a classe foi para a pasta abstrata para que
//o exemplo-02.php dê certo.



?>