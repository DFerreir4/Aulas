<?php

class Animal{
    
    public function falar(){
        return "som";
    }

    public function mover(){
        return "Anda";
    }

}


class Cachorro extends Animal{
    public function falar(){
        return "late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{
    public function mover(){
        return "Voa e ".parent::mover();
        //o parent está trazendo os dados da class abstrata "PAI"
    }
    public function falar(){
        return "Canta";
    }
}

$pluto = new Cachorro();
echo $pluto->falar(). "<br>";
echo $pluto->mover(). "<br>";
echo "-----------------------------------<br>";
$garfield = new Gato();
echo $garfield->falar(). "<br>";
echo $garfield->mover(). "<br>";
echo "-----------------------------------<br>";
$picaPau = new Passaro();
echo $picaPau->falar(). "<br>";
echo $picaPau->mover(). "<br>";

?>