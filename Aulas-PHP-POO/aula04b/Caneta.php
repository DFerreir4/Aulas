<?php

class Caneta{
   //atributos
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;

 
 
 //Metodo construtor
 //Pode ter o mesmo nome da classe

/* public function __construct(){
   $this->cor = "Azul";
   $this->tampar();

 
}
 */

 //Mudança de construtor(exemplo);

 public function __construct($m,$c,$p){
   $this->modelo = $m;
   $this->cor = $c;
   $this->ponta = $p;
   $this->tampar();

 }
 
 //Metodo criado para o concstrutor utilizar

 public function tampar(){
   $this->tampada = true;
 }
 
 


    //Metodos
    public function getModelo(){
    return $this->modelo;
 }

 public function setModelo($m){
    $this->modelo = $m;
 }

 public function getPonta(){
    return $this->ponta;
 }

 public function setPonta($p){
    $this->ponta = $p;
 }








}









?>