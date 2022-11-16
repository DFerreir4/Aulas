<?php

    interface Veiculo{
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);



    }
    //classe abstrata pode implementar varias interfaces
    //não pode estanciar classes abstratas
    abstract class Automovel implements Veiculo{

        
        //interface
        public function acelerar($velocidade)
        {
            echo "O veiculo acelerou até ".$velocidade. " km.h";
        }

        public function freiar($velocidade)
        {
            echo "O veículo freiou até ".$velocidade. "km/h";
        }

        public function trocarMarcha($marcha)
        {
            echo "O veículo engatou a marcha ". $marcha;
        }

    }

    class DelRei extends Automovel{

        public function empurrar(){

        }

    }

    $carro = new DelRei();
    $carro->acelerar(200);

?>