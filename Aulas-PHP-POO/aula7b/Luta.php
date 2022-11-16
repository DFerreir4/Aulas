<?php 

require_once 'Lutador.php';
class Luta
{
//Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;
    
//Metodos especiais
public function getDesafiado(){
return $this->desafiado;
}

public function setDesafiado($desafiado){
$this->desafiado = $desafiado;
}

public function getDesafiante(){
return $this->desafiante;
}

public function setDesafiante($desafiante){
    $this->desafiante = $desafiante;
}

public function getRounds(){
    return $this->rounds;
}

public function setRounds($rounds){
    $this->rounds = $rounds;
}

public function getAprovado(){
    return $this->aprovado;
}

public function setAprovado($aprovado){
    $this->aprovado = $aprovado;
}


//Metodos


public function marcarLuta($l1,$l2){
    if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
        $this->aprovada = true;
        $this->desafiado = $l1;
        $this->desafiante = $l2;
    }else{
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;

    }
    
}

public function lutar(){
    if($this->aprovada){
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0,2);

        switch($vencedor){
            case 0: //empate
                echo "<p>Empate</p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1: //desafiado vence
                echo "<p>".$this->desafiado->getNome()." Vencedor!!</p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();

                break;
            case 2: //desafiante vence
                echo "<p>".$this->desafiante->getNome()." Vencedor!!</p>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();

                break;
        }

    }else{
        echo "<p>Luta não pode acontecer!!!</p>";
    }

}










}






?>