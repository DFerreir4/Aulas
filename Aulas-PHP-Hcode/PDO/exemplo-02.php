<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
//alterando mysql:dbname para sqlsrv. Que é a conexão do mysql server
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login;");

$stmt->execute();
//execute() para verificar a comunicação com o banco de dados

$results = $stmt->fetchall(PDO::FETCH_ASSOC);
//para trazer o indice com o associativo
//FETCH_ASSOC é uma constante da classe PDO para fatiar os dados(vim separado).

echo json_encode($results);



//var_dump($results);

?>