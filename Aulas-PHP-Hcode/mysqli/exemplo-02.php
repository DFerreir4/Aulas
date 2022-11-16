<?php

$conn = new mysqli("localhost","root","","dbphp7");


if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");

$data = array();

while($row = $result->fetch_assoc()) {
//enquanto estiver tendo dados , tras e armazena na $row
    array_push($data,$row);
    //array_push = adicione um novo item no $data = $array();

}

echo json_encode($data);



?>