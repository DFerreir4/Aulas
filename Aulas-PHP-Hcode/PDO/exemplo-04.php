<?php

$conn = new PDO("mysql:
host=localhost;
dbname=dbphp7",
"root",
""
);


$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN,des_senha = :PASSWORD WHERE id_usuario = :ID");

$login = "Pelolita";
$password = "2424";
$id = 6;


$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Inserido OK!";



?>