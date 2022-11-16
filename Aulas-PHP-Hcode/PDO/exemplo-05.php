<?php

$conn = new PDO("mysql:
host=localhost;
dbname=dbphp7",
"root",
""
);


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :ID");


$id = 6;



$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Delete OK!";



?>