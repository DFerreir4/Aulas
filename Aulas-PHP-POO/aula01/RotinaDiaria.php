<?php 

class RotinaDiaria{

    var $escovarDentes;
    var $fazerCafe;
    var $iniciarTrabalhos;

    function escovar(){
        $this->escovarDentes = true;
    }

    function cafe(){
        $this->fazerCafe = true;
    }

    function inicio(){
        $this->iniciarTrabalhos = false;
    }

    function comecarTrabalhos(){
        if($this->fazerCafe == true){
            echo "Depois desse cafezinho, vamos iniciar os projetos!";
        } else{
            echo "Vamos fazer o café primeiro!";
        }
    }


}



?>