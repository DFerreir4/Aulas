<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
//atributos
    private $volume;
    private $ligado;
    private $tocando;


//metodos especiais
    public function __contruct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($v){
        $this->volume = $v;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($l){
        $this->ligado = $l;

    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($t){
        $this->tocando = $t;
    }

    //metodos

    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<----------MENU---------->";
        echo "<p>esta ligado?</p>".($this->getLigado()?"SIM":"NÃO");
        echo "<p>esta tocando?</p>".($this->getTocando()?"SIM":"NÃO");
        echo "</br>Volume: ".$this->getVolume();
        for($i=0; $i <= $this->getVolume();$i+=10){
            echo "|";
         
        }
        echo "</br>";
    }
    public function fecharMenu(){
        echo "<p>Fechar menu...</p>";

    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        }else{ 
            echo "erro! não posso aumentar o volume!";
        }

    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);

        }else{
            echo "erro! não posso diminuir o volume!";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume();
        }

    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume()==0){
            $this->setVolume();

        }
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando()) ){
            $this->setTocando(true);

        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }






}






?>