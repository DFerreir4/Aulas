<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa{

//Atributos

private $setor;
private $trabalhando;

//Metodos especiais

/*public function __construct($setor,$trabalhando)
{
    $this->setor = $setor;
    $this->trabalhando = $trabalhando;
} */

public function getSetor(){
    return $this->setor;
}

public function setSetor($setor){
    $this->setor = $setor;
}

public function getTrabalhando(){
    return $this->trabalhando;
}

public function setTrabalhando($trabalhando){
    $this->trabalhando = $trabalhando;
}

//Metodos

public function mudarTrabalho(){
    $this->trabalhando = ! $this->trabalhando;
    
}







}




?>