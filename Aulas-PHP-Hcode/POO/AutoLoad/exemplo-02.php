<?php
function incluirClasses($nomeClasse){
    //função criada para ligar as classes da mesma pasta
        if(file_exists($nomeClasse.".php") === true){
            require_once($nomeClasse.".php");
        }
    }
    
    spl_autoload_register("incluirClasses");
    
    spl_autoload_register(function($nomeClasse){
    
        if(file_exists("Abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){
            require_once("Abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php");
        }
    
    });
    


$carro = new DelRei();
$carro->acelerar(80);


?>