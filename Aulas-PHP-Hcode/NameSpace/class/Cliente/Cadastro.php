<?php

namespace Cliente;

use Cadastro;

class Cliente extends Cadastro {

public function registrarVenda(){
    echo "foi registrada uma veda para o cliente ".$this->getNome();

}


}



?>