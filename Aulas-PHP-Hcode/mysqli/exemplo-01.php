<?php

$conn = new mysqli("localhost","root","","dbphp7");


if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios(des_login,des_senha) VALUES (?,?)");
//method prepare serve para preparar um comando que queira
//enviar para o banco de dados

$stmt->bind_param("ss",$login,$senha);

$login = "user";
$senha = "54321";
//method bind_param ele espera o tipo de dado das interrogações do VALUES
//ss = string, string
// o segundundo parametro do method bind_param(), são os valores que quer enviar para o banco


$stmt->execute();

//caso queria fazer um novo cadastro basta colocar novos dados nas variaveis
//Exemplo abaixo

$login = "Diego";
$senha = "3441";

$stmt->execute();



?>