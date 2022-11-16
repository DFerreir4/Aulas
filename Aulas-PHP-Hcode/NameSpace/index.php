<?php

require_once("config.php");

//para usar o namespace do cliente
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Dijalma Sindeaux");
$cad->setEmail("Dijalma@hcode.com.br");
$cad->setSenha(123456);

$cad->registrarVenda();
// o echo não imprime objeto
// como temos o method magico __toString, tornando os objetos em string
// será impresso



?>