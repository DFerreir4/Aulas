<?php

class Lutador{

//Atributos

private $nome;
private $nascionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;


//Metodos especiais

public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
    $this->nome= $no;
    $this->nascionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias= $vi;
    $this->derrotas = $de;
    $this->empates = $em;


}


public function getNome(){
    return $this->nome;
}

public function setNome($no){
    $this->nome = $no;
}

public function getPeso(){
    return $this->peso;
}

public function setPeso($pe){
    $this->peso = $pe;
    $this->setCategoria();
}

public function getCategoria(){
    return $this->categoria;
}

private function setCategoria(){
    if($this->peso < 52.2){
        $this->categoria = "Invalido";
    }elseif($this->peso <= 70.3){
        $this->categoria = "Leve";
    }elseif($this->peso <= 83.9){
        $this->categoria = "Médio";
    }elseif($this->peso <= 120.2){
        $this->categoria = "Pesado";
    } else {
        $this->categoria = "Invalido";
    }
}

public function getNascionalidade(){
    return $this->nascionalidade;
}

public function setNascionalidade($na){
    $this->nascionalidade = $na;
}

public function getIdade(){
    return $this->idade;
}

public function setIdade($id){
    $this->idade = $id;
}

public function getAltura(){
    return $this->altura;
}

public function setAltura($al){
    $this->altura = $al;
}



public function getVitorias(){
    return $this->vitorias;
}

public function setVitorias($vi){
    $this->vitorias = $vi;
}

public function getDerrotas(){
    return $this->derrotas;
}

public function setDerrotas($de){
    $this->derrotas = $de;
}

public function getEmpates(){
    return $this->empates;
}

public function setEmpates($em){
    $this->empates = $em;
}


//Metodos 

public function apresentar(){
    echo "<p>------------------------------</p></br>";
    echo "Lutador: ".$this->getNome()."</br>";
    echo "Origem: ".$this->getNascionalidade()."</br>";
    echo $this->getIdade()." anos</br>";
    echo $this->getAltura()." m de altura </br>";
    echo "Pesando ".$this->getPeso()."Kg</br>";
    echo "Ganhou: ".$this->getVitorias()."</br>";
    echo "Perdeu: ".$this->getDerrotas()."</br>";
    echo "Empatou: ".$this->getEmpates()."</br>";
}
public function status(){
    echo "<p>------------------------------</p></br>";
    echo $this->getNome()."</br>";
    echo "é um peso ".$this->getCategoria()."</br>";
    echo $this->getVitorias(). " vitórias</br>";
    echo $this->getDerrotas(). " derrotas</br>";
    echo $this->getEmpates(). " empates</br>";

}
public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
}
public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);

}
public function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);
}



}








?>