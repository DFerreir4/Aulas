<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{

    //Atributos

    private $especialidade;
    private $salario;


    //Metodos especiais

    /*public function __constrct($especialidade,$salario){
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    } */

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;

    }


    //Metodos

    public function receberAum($aum){
        $this->salario += $aum;
        
    }







}





?>