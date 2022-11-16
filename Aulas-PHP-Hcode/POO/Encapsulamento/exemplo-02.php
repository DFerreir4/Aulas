<?php

class Pessoa {

 public $nome = "Rasmus Lerdorf";
 protected $idade = 48;
 private $senha = "123456";


 public function verDados(){
    echo $this->nome."<br>";
    echo $this->idade."<br>";
    echo $this->senha;
 }

}


class Programador extends Pessoa{

    public function verDados(){
        echo get_class($this)."<br>";
        //get_classe é uma função do php para descobrir de qual classe está vindo os dados.
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha;
     }

}

$objeto = new Programador();
//echo $objeto->nome. "<br>"; //exibiu o nome que está nos atributos
//echo $objeto->idade."<br>"; //exibiu um erro dizendo que o dado é protegido mas herdeiros conseguem acessar o dado
//echo $objeto->senha."<br>"; //exibiu um erro dizendo que o dado é privado, só quem pode acessar é a própria classe

$objeto->verDados();



?>