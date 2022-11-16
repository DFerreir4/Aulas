<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao{

    private $espectador;
    private $filme;

    public function __construct($espectador,$filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);

        
    }
    
    
    public function avaliar(){
        $this->filme->setAvaliacao(5);

    }

    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);

    }

    public function avaliarPorc($porc){
        $novaNota = 0;
        if($porc <= 20){
            $novaNota = 3;
        }elseif($porc <= 50){
            $novaNota = 5;
        }elseif($porc <= 90){
            $novaNota = 8;
        }else{
            $novaNota = 10;
        }

        $this->filme->setAvaliacao($novaNota);

    }

    //Metodos getters e setters

    public function getEspectador(){
        return $this->espectador;

    }

    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }

    public function getFilme(){
        return $this->filme;
    }

    public function setFilmes($filme){
        $this->filme = $filme;
    }







}









?>