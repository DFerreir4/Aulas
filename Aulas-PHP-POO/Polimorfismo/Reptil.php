<?php
require_once 'Animal.php';


class  Reptil extends Animal {

    private $corEscama;

//deve-se implementar todos os metodos abstratos*(Class Animal) para sair do erro do extends;

public function alimentar(){
    echo "<p>comendo vergetais!</p>";
}

public function emitirSom(){
    echo "<p>Som de reptil!</p>";
}

public function locomover(){
    echo "<p>Rastejando</p>";

}

public function getCorEscama(){
    return $this->corEscama;
}

public function setCorEscama($corEscama){
    $this->corEscama = $corEscama;
}







}





?>