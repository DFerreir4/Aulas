<?php

class ContaBanco {

   //Atributos
   
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


 
    
 //Metodos   
    public function abrirConta($t){
      $this->setTipo($t);
      $this->setStatus(true);

      if($t == "CC"){
        $this->setSaldo(50);
      }elseif($t == "CP"){
        $this->setSaldo(150);

      }

    
    
    }

    public function fecharConta(){
      if($this->getSaldo() > 0){
        echo "<p>Conta ainda tem dinheiro! Não Posso fecha-la!</p>";
      }elseif($this->getSaldo() < 0){
        echo "<p>Conta está em débito! Impossivel encerrar!</p>!";
      }
      else{
        $this->setStatus(false);
        echo "<p>Conta de {$this->getDono()} fechada com sucesso! </p>";
      }
    }

    public function depositar($v){
      if($this->getStatus()){
        $this->setSaldo($this->getSaldo() + $v);
       // outra opção de ser feita -> $this->saldo = $this->saldo + $v;
       echo "<p>Deposito de R$ $v na conta de {$this->getDono()}</p>";
      }else{
        echo "<p>conta fechada, não consigo depositar!</p>";
      }
    
    }

    public function sacar($v){
      if($this->getStatus()){
        if($this->getSaldo() >= $v){
          $this->setSaldo($this->getSaldo() - $v);
          // $this->saldo = $this->saldo - $v;
          echo "<p>Saque de $v autorizado na conta de {$this->getDono()}</p>";
        }else{ 
          echo "<p>Saldo insuficiente para saque!</p>";
        }
      }else{
        echo "<p>Não posso sacar de uma conta fechada.</p>";
      }

    }
   
    public function pagarMensal(){
      if($this->getTipo() == "CC"){
        $valor = 12;

      }elseif($this->getTipo() == "CP"){
        $valor = 20;
      }

      if($this->getStatus()){
        if($this->getSaldo() > $valor){
          $this->setSaldo($this->getSaldo() - $valor);
          echo "<p>Mensalidade de R$ $valor debitada na conta de {$this->getDono()}</p>";
        }else {
          echo "<p>Problemas com a conta! Impossivel de sacar.</p>";
        }
      }

    }

 //Metodos especiais

 public function __constructor(){
  $this->setSaldo(0);
  $this->setStatus(false);
  echo "<p>Conta criada com sucesso!</p>";

}


 public function setNumConta($nC){
   $this->numConta = $nC;


}
   
 
 public function getNumConta(){
      return $this->numConta;;
    }

  
    public function setTipo($t){
      $this->tipo = $t;

   }
  
  
    public function getTipo(){
      return $this->tipo;
    }


    public function setDono($d){
      $this->dono = $d;
   }
   
   
    public function getDono(){
        return $this->dono;
    }

  

    public function setSaldo($s){
      $this->saldo = $s;

   }
  
    public function getSaldo(){
      return $this->saldo;
    }

   

    public function setStatus($sts){
      $this->status = $sts;
   }
   
    public function getStatus(){
      return $this->status;
    }






}












?>