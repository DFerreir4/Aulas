<?php


class Endereco{
    //Atributos
    private $logradouro;
    private $numero;
    private $cidade;

    //Metodo Construtor
    public function __construct($a,$b,$c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        
    }
    
    
   /* 
    //Metodos Getters e Setters
    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

*/

public function __destruct()
{ //quando a classe chega no fim da memoria ou limpar da memoria
    //usar quando quer que desconecte do banco de dados
    //matar variáveis
    //sempre vai ser a ultima coisa que vai ser executada antes de liberar a memória
    var_dump("DESTRUIR");
}

public function __toString()
{//transforma o objeto em string - converter
    return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    
}



}

$meuEndereco = new Endereco("Rua exemplo",41,"Recife");

echo $meuEndereco;







?>