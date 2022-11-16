<?php

$conn = new PDO("mysql:
host=localhost;
dbname=dbphp7",
"root",
""
);

$conn->beginTransaction();
//inicia a transação do delete a baixo


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");
//a ? é o primeiro parâmetro do array do execute()

$id = 2;

$stmt->execute(array($id));


//$conn->rollBack();
//cancela a transação, dizendo: volte como estava antes. Parecendo um ctrl+z
$conn->commit();

echo "Delete OK!";



?>