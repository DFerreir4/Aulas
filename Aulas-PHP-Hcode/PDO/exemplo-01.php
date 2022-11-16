<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
//$conexão do mysql local
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");

$stmt->execute();
//execute() para verificar a comunicação com o banco de dados

$results = $stmt->fetchall(PDO::FETCH_ASSOC);
//para trazer o indice com o associativo
//FETCH_ASSOC é uma constante da classe PDO para fatiar os dados(vim separado).

foreach($results as $row){
    foreach($row as $key => $value){
        //key = o nome do campo e value=o dado do campo
        echo "<strong>".$key.":</strong>".$value."<br>";
    }
    echo "========================================================<br>";
}




//var_dump($results);

?>