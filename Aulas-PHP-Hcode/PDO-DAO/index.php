<?php

require_once 'config.php';

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios);
*/

//Carrega um usuário
//$root = new Usuarios();
//$root->loadById(4);
//echo $root;


//$lista = Usuarios::getList();
//quando o metódo é estatico você pode colocar o nome da classe 
// 2x : e o nome do metódo. Não precisando estanciar a classe.
//echo json_encode($lista);


//carregar uma lista de usuários buscando pelo login

//$search = Usuarios::search("Di");

//echo json_encode($search);


//Carregar dados do usuario com login e senha corretos

//$usuario = new Usuarios();
//$usuario->login("Diego",3441);

//echo $usuario;
//lembrete: json_encode é para listas e echo é apenas para 1 row

//$incluir = new Usuarios();
//$incluir->incluir("Ana Katia","444444");

//CRIANDO UM NOVO USUARIO **
// sem o método construtor criado
//$aluno = new Usuarios();
//$aluno->setDes_Login("aluno");
//$aluno->setDes_Senha("@luno");

//$aluno->incluir();

//echo $aluno;

//com o método construtor criado
//$aluno = new Usuarios("Ana Katia","9900");

//$aluno->incluir();

//echo $aluno; **


//Alterar um usuario
/*
$usuario = new Usuarios();

$usuario->loadById(7);
//o loadById da um select em um determinado usuario
$usuario->alterar("professor","Koala");
// o metodo alterar ja faz o update


echo $usuario;
*/

$deletar = new Usuarios();
$deletar->loadById(7);
$deletar->deletar(7);


//echo $deletar;




?>